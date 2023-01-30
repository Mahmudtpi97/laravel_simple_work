@extends('layouts.app')
@section('title','This is Singel User')

@section('content')
    <div class="table-area  col-md-6 m-auto p-3 text-center">
		 <div class="table-header mb-3">
			 <h3>{{$users->name}}'s List</h3>
		 </div>
		 <table class="table single-user-table table-borderless table-striped " cellpadding="20" cellspacing="10" border="0">
 		 		<tr>
 		 			<th>ID</th>
		 			<td>{{$users->id}}</td>
		 		</tr>
		 		<tr>
 		 			<th>Name</th>
		 			<td>{{$users->name}}</td>
		 		</tr>
		 		<tr>
 		 			<th>Email</th>
		 			<td>{{$users->email}}</td>
		 		</tr>
		 		<tr>
 		 			<th>Phone</th>
		 			<td>{{$users->phone}}</td>
		 		</tr>
		 		<tr>
 		 			<th>Address</th>
		 			<td>{{$users->address}}</td>
		 		</tr>
		 		<tr>
 		 			<th>Image</th>
		 			<td><img src="{{asset($users->image)}}"></td>
		 		</tr>
		</table>
		<a href="{{url('users')}}">Back</a>
	</div>

@endsection()