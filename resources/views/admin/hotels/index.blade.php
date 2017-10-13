@extends('layouts.admin')

@section('content')
    <section class="content-header">
      <h1>
        Hotels
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Hotels</li>
      </ol>
    </section>

    <!-- Main content -->
<section class="content container-fluid">
    @if(Session::has('deleted_hotel'))
    <p class="bg bg-danger">{{ session('deleted_hotel') }}</p>
    @endif
   	@if($hotels)
   <table class="table">
    <thead>
      <tr>
      	<th>Id</th>
      	<th>Image</th>
      	<th>Name</th>
        <th>Description</th>
        <th>Check In</th>
        <th>Check Out</th>
        <th>Offer</th>
        <th>Per Night Charge</th>
        <th>Policy Text</th>
        <th>Rating</th>
        <th>Facilities</th>
        <th>Status</th>

      </tr>
    </thead>
    <tbody>
    	@foreach($hotels as $hotel)
      <tr>
        <td>{{ $hotel->id }}</td>
        <td><img height="60" src="{{ $hotel->image ? $hotel->image : 'http://via.placeholder.com/450X450' }}"></td>
        <td><a href="{{ route('admin.hotels.edit', $hotel->id) }}">{{ $hotel->name }}</a></td>
        <td>{{ $hotel->description }}</td>
        <td>{{ $hotel->check_in_time }}</td>
        <td>{{ $hotel->check_out_time }}</td>
        <td>{{ $hotel->offer }}</td>
        <td>{{ $hotel->per_night_charge }}</td>
        <td>{{ $hotel->policy_text }}</td>
        <td>{{ $hotel->rating }}</td>
        <td>{{ $hotel->facilities }}</td>
        <td>{{ $hotel->is_active == 1 ? "Active" : "Not Active" }}</td>

      </tr>
      @endforeach
    </tbody>
  </table>
  @endif
     </section>

@endsection