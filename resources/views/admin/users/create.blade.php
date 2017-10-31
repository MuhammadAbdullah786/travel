@extends('layouts.admin')

@section('content')
    <section class="content-header">
      <h1>
        Users
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Users</li>
        <li class="active">Add New</li>
      </ol>
    </section>

    <!-- Main content -->
<section class="content container-fluid">
   @include('includes.form-error')
   	{!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store', 'files'=>true, 'class'=>'form-horizontal']) !!}
   	<div class="box-body">
	<div class="form-group">
	<label for="inputName" class="col-sm-2 control-label">{!! Form::label('name', 'Name:') !!}</label>
	<div class="col-sm-10">
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
	</div>
	<div class="form-group">
		<label for="inputEmail" class="col-sm-2 control-label">
		{!! Form::label('email', 'Email:') !!}</label>
		<div class="col-sm-10"> 
		{!! Form::email('email', null, ['class' => 'form-control']) !!}
	</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">
		{!! Form::label('contact_no', 'Contact No.:') !!}
		</label>
		<div class="col-sm-10">
		{!! Form::text('contact_no', null, ['class' => 'form-control']) !!}
	</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">
		{!! Form::label('location', 'Location:') !!}
		</label>
	<div class="col-sm-10">
		{!! Form::text('location', null, ['class' => 'form-control']) !!}
	</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">
		{!! Form::label('address', 'Address:') !!}
				</label>
	<div class="col-sm-10">
		{!! Form::textarea('address', null, ['class' => 'form-control', 'size' => '30x3']) !!}
	</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">
		{!! Form::label('sex', 'Sex:') !!}
	</label>
	<div class="col-sm-10">
		{!! Form::select('sex', array("Male" => 'Male', "Female" => 'Female'), "Male", ['class' => 'form-control']) !!}
	</div>
</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">
		{!! Form::label('bio', 'Bio:') !!}
			</label>
	<div class="col-sm-10">
		{!! Form::textarea('bio', null, ['class' => 'form-control', 'size' => '30x3']) !!}
	</div>
</div>
    <div class="form-group">
    	<label class="col-sm-2 control-label">
		{!! Form::label('role_id', 'Role:') !!}
		</label>
	<div class="col-sm-10">
		{!! Form::select('role_id', array('' => 'Select Type') + $roles, null, ['class' => 'form-control']) !!}
	</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">
		{!! Form::label('photo', 'Upload Picture:') !!}
				</label>
	<div class="col-sm-10">
		{!! Form::file('photo', null, ['class' => 'form-control']) !!}
	</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">
		{!! Form::label('password', 'Password:') !!}
	</label>
	<div class="col-sm-10">
		{!! Form::password('password', ['class' => 'form-control']) !!}
	</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">
		{!! Form::label('is_active', 'Status:') !!}
		</label>
	<div class="col-sm-10">
		{!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), 0, ['class' => 'form-control']) !!}
	</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"></label>
		<div class="col-sm-10">
		{!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
	</div>
	</div>
     {!! Form::close() !!}

     
    </section>
@endsection