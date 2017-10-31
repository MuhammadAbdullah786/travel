@extends('layouts.admin')

@section('content')
    <section class="content-header"> 
      <h1>
        Users
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
<section class="content container-fluid">
  <div class="box-body">
  @if(Session::has('deleted_user'))
    <p class="bg bg-danger">{{ session('deleted_user') }}</p>
    @endif
    @if($users)
   <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Create on</th>
        <th>Updated on</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td><img height="60" src="{{ $user->photo ? $user->photo : 'http://via.placeholder.com/450X450' }}"></td>
        <td><a href="{{ route('admin.users.edit', $user->id) }}">{{ $user->name }}</a></td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role->name }}</td>
        <td>{{ $user->is_active == 1 ? "Active" : "Not Active" }}</td>
        <td>{{ $user->created_at->diffForHumans() }}</td>
        <td>{{ $user->updated_at->diffForHumans() }}</td>
        <td> <a href="#">view profile</a> | <a href="#">delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
  @endif

  </section>

@endsection

@section('scripts')
<script src="{{ url('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ url('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ url('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('dist/js/demo.js') }}"></script>
<script>
  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
@endsection