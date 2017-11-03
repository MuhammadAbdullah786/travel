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
    <form method="post" action="/users/deleteUsers">
    <p><input type="submit" name="submit" value="Delete All"></p>
   <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th><input type="checkbox" id="checkAll"/></th>
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
        <td><input type="checkbox" name="checkbox[]" data-id="checkbox" class="cb" value="{{$user->id}}" /> </td>
        <td>{{ $user->id }}</td>
        <td><img height="60" src="{{ $user->profile->photo ? $user->profile->photo : 'http://via.placeholder.com/450X450' }}"></td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role->name }}</td>
        <td>{{ $user->is_active == 1 ? "Active" : "Not Active" }}</td>
        <td>{{ $user->created_at->diffForHumans() }}</td>
        <td>{{ $user->updated_at->diffForHumans() }}</td>
        <td> <a href="{{ route('admin.users.edit', $user->id) }}">Edit</a> | <a href="{{ route('admin.users.show', $user->id) }}">View profile</a> | 
          <a href="{{ route('admin.users.delete', $user->id) }}" onclick="confirm('Do you want to delete?');">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</form>
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
      'info'        : false,
      'autoWidth'   : false
    })
  })
</script>
<script type="text/javascript">
  $("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});
</script>
@endsection