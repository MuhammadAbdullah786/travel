<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
class AgentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agent.login');
    }
    public function dashboard()
    { 
        $this->middleware('auth');
        return view('agent.dashboard');
    }
    public function logout() 
    {  
    Auth::logout();
    return Redirect::route('agent.login');
    }
}
