<div class="container">
    <div class="col-sm-3">
  <h2>Admin Menu</h2>
  <table class="table table-bordered table-condensed">
    <thead>
      <tr>
        <th><a href="/admin">Dashboard</a></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a href="{{ route('admin.users.index') }}">List Users</a></td>
      </tr>
      <tr>
        <td><a href="{{ route('admin.users.create') }}">Create User</a></td>
      </tr>
      <tr>
        <td><a href="{{ route('admin.posts.index') }}">List Posts</a></td>
      </tr>
      <tr>
        <td><a href="{{ route('admin.posts.create') }}">Create Post</a></td>
      </tr>
      <tr>
        <td><a href="{{ route('admin.categories.index') }}">List Categories</a></td>
      </tr>
      <tr>
        <td><a href="{{ route('admin.categories.index') }}">Create Category</a></td>
      </tr>
      <tr>
        <td><a href="#">Change Password</a></td>
      </tr>
      <tr>
        <td><a href="#">Logout</a></td>
      </tr>
    </tbody>
  </table>
</div>
</div>
    