@extends('layouts.admin')

@section('content')

   <div class="panel-heading">Add Hotel</div>
   @include('includes.form-error')
    <div class="panel-body">
   	{!! Form::open(['method' => 'POST', 'action' => 'AdminHotelsController@store', 'files'=>true]) !!}
	<div class="form-group">
		{!! Form::label('name', 'Name:') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('description', 'Description:') !!}
		{!! Form::textarea('description', null, ['class' => 'form-control', 'size' => '30x3']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('image', 'Upload Picture:') !!}
		{!! Form::file('image', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('check_in_time', 'Check In Time:') !!}
		{!! Form::text('check_in_time', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('check_out_time', 'Check Out Time:') !!}
		{!! Form::text('check_out_time', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('offer', 'Offer:') !!}
		{!! Form::textarea('offer', null, ['class' => 'form-control', 'size' => '30x3']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('per_night_charge', 'Per Night Charge:') !!}
		{!! Form::text('per_night_charge', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('policy_text', 'Policy Text:') !!}
		{!! Form::textarea('policy_text', null, ['class' => 'form-control', 'size' => '30x3']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label('raging', 'Rating:') !!}
		{!! Form::select('rating', array("1" => '1 Star', "2" => '2 Star', "3" => '3 Star', "4" => '4 Star', "5" => '5 Star',), "null", ['class' => 'form-control']) !!}
	</div>
	
   <div class="form-group">
		{!! Form::label('facilities', 'Facilities:') !!}
		{!! Form::textarea('facilities', null, ['class' => 'form-control', 'size' => '30x3']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('map', 'Map:') !!}
		{!! Form::textarea('map', null, ['class' => 'form-control', 'size' => '30x3']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label('is_active', 'Status:') !!}
		{!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), 0, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Add New Hotel', ['class' => 'btn btn-primary']) !!}
	</div>
     {!! Form::close() !!}

     
    </div>
@endsection