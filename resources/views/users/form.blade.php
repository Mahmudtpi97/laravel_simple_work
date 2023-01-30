@extends('layouts.app')
@section('title','This is User Update')

@section('content')

	<div class="content_area">
		<div class="form-area col-md-6 m-auto p-3">
			<div class="content-header mb-3">
			     <h3><strong>{{$users->name}}</strong>'s {{$headline}}</h3>
		    </div>
			<form action="{{ route('users.update',['user'=> $users->id]) }}" method="POST">

				@csrf
				@method('PUT')
		         <div class="form-group row mb-3">
		              <label for="name" class="col-md-3 col-form-label">Name: </label>
		              <div class="col-sm-9">
		                  <input type="text" name="name" id="name" class="form-control" value="{{$users->name}}">
		              </div>
		         </div>
		         <div class="form-group row mb-3">
		              <label for="email" class="col-md-3 col-form-label">Email</label>
		              <div class="col-sm-9">
		                  <input type="text" name="email" id="email" class="form-control" value="{{$users->email}}">
		              </div>
		         </div>
		         <div class="form-group row mb-3">
		              <label for="phone" class="col-md-3 col-form-label">Phone</label>
		              <div class="col-sm-9">
		                  <input type="text" name="phone" id="phone" class="form-control" value="{{$users->phone}}">
		              </div>
		         </div>
		         <div class="form-group row mb-3">
		              <label for="address" class="col-md-3 col-form-label">Address</label>
		              <div class="col-sm-9">
		                  <input type="text" name="address" id="address" class="form-control" value="{{$users->address}}">
		              </div>
		         </div>
		         {{-- <div class="form-group row mb-3">
		              <label for="image" class="col-md-3 col-form-label">Image</label>
		              <div class="col-sm-9">
		                  <input type="file" name="image" id="image" class="form-control" value="{{$users->image}}">
		              </div>
		         </div> --}}
		         <div class="form-group">
	                    <input type="submit" class="btn btn-primary" value="Update">
	                    <a target="blank" href="{{url('users')}}">Back</a>
	              </div>
			</form>

		</div>
	</div>

@endsection()