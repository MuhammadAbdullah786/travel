@extends('layouts.admin')

@section('content')
    <section class="content-header">
      <h1>
        Users
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">User</li>
        <li class="active">Edit</li>
      </ol>
    </section>

    <!-- Main content -->
<section class="content container-fluid">
    	@include('includes.form-error')
   	<div class="row">
   	<div class="col-sm-3">
   		<img src="{{ $user->photo ? $user->photo : 'http://via.placeholder.com/400x400'}}" class="img-responsive img-rounded">
   	</div>
   	<div class="col-sm-9">
   	
   	{!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files'=>true]) !!}
	<div class="form-group">
		{!! Form::label('name', 'Name:') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('email', 'Email:') !!}
		{!! Form::email('email', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('contact_no', 'Contact No.:') !!}
		{!! Form::text('contact_no', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('location', 'Location:') !!}
		{!! Form::text('location', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('address', 'Address:') !!}
		{!! Form::textarea('address', null, ['class' => 'form-control', 'size' => '30x3']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('sex', 'Sex:') !!}
		{!! Form::select('sex', array("Male" => 'Male', "Female" => 'Female'), null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('bio', 'Bio:') !!}
		{!! Form::textarea('bio', null, ['class' => 'form-control', 'size' => '30x3']) !!}
	</div>
    <div class="form-group">
		{!! Form::label('role_id', 'Role:') !!}
		{!! Form::select('role_id', array('' => 'Select Type') + $roles, null, ['class' => 'form-control']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label('photo', 'Upload Picture:') !!}
		{!! Form::file('photo', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('password', 'Password:') !!}
		{!! Form::password('password', ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('is_active', 'Status:') !!}
		{!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), 'null', ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Update User', ['class' => 'btn btn-primary col-sm-6']) !!}
	</div>
     {!! Form::close() !!}

	{!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy',$user->id]]) !!}
	<div class="form-group">
		{!! Form::submit('Delete User', ['class' => 'btn btn-danger col-sm-6']) !!}
	</div>
	{!! Form::close() !!}
     
    </div>

    </div>

  </section>

@endsection