@extends('layouts.admin')

@section('content')
    <section class="content-header">
      <h1>
        User Details
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Users</li>
        <li class="active">Details</li>
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
		{{ $user->name }}
	</div>
	</div>
	<div class="form-group">
		<label for="inputEmail" class="col-sm-2 control-label">
		{!! Form::label('email', 'Email:') !!}</label>
		<div class="col-sm-10"> 
		{{ $user->email }}
	</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">
		{!! Form::label('contact_no', 'Contact No.:') !!}
		</label>
		<div class="col-sm-10">
		{{ $user->profile->contact_no }}
	</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">
		{!! Form::label('location', 'Location:') !!}
		</label>
	<div class="col-sm-10">
		{{ $user->profile->location }}
	</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">
		{!! Form::label('address', 'Address:') !!}
				</label>
	<div class="col-sm-10">
		{{ $user->profile->address }}
	</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">
		{!! Form::label('sex', 'Sex:') !!}
	</label>
	<div class="col-sm-10">
		{{ $user->profile->sex }}
	</div>
</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">
		{!! Form::label('bio', 'Bio:') !!}
			</label>
	<div class="col-sm-10">
		{{ $user->profile->bio }}
	</div>
</div>
    <div class="form-group">
    	<label class="col-sm-2 control-label">
		{!! Form::label('role_id', 'Role:') !!}
		</label>
	<div class="col-sm-10">
		{{ $user->role->name }}
	</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">
		{!! Form::label('photo', 'Picture:') !!}
				</label>
	<div class="col-sm-10">
		<img src="{{ $user->profile->photo}}" height="160" width="200">
	</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label">
		{!! Form::label('is_active', 'Status:') !!}
		</label>
	<div class="col-sm-10">
		{{ $user->is_active == '1' ? "Active" : "Deactive" }}
	</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">
			<a href="{{ route('admin.users.index') }}">{!! Form::button('Back', ['class' => 'btn btn-primary']) !!}</a></label>
		<div class="col-sm-10">
		{!! Form::submit('Delete User', ['class' => 'btn btn-danger']) !!}
	</div>
	</div>
     {!! Form::close() !!}
</div>
     
    </section>
@endsection