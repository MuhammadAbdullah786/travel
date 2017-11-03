<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\User;
use App\Role;
use App\Profile;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','id')->all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        $input = $request->all();
  
        if($file = $request->file('photo')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images/', $name);
            $profile['photo'] =  $name;
        }
        
            $input['password'] = bcrypt($request->password);

            $user = User::create($input);
            
            $profile['user_id'] =  $user->id;
            $profile['address'] = $input['address'];
            $profile['location'] = $input['location'];
            $profile['contact_no'] = $input['contact_no'];
            $profile['location'] = $input['location'];
            $profile['sex'] = $input['sex'];
            $profile['bio'] = $input['bio'];

            Profile::create($profile);
            return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $user_id = $user->id; 
        $profile = Profile::where('user_id', '=', $user_id)->firstOrFail();
        $user['photo'] = $profile->photo;
        $user['contact_no'] = $profile->contact_no;
        $user['location'] = $profile->location;
        $user['address'] = $profile->address;
        $user['sex'] = $profile->sex;
        $user['bio'] = $profile->bio;

        $roles = Role::pluck('name','id')->all();
        return view('admin.users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();  
        $user = User::findOrFail($id);
        $profile = Profile::where('user_id', '=', $user->id)->firstOrFail();

        if(trim($request->password) == ''){

            $input = $request->except('password');

        }else{

            $input['password'] = bcrypt($request->password); 

        }
        

        if($file = $request->file('photo'))
        {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $inputProfile['photo'] = $name;        
        }
        $input['is_active'] = $request->is_active;
        $user->update($input);

        $inputProfile['contact_no'] = $input['contact_no'];
        $inputProfile['location'] = $input['location'];
        $inputProfile['address'] = $input['address'];
        $inputProfile['sex'] = $input['sex'];
        $inputProfile['bio'] = $input['bio'];

        $profile->update($inputProfile);

        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/users');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/users');
    }
}
