<?php use Illuminate\Support\Facades\Storage; ?>
@extends('layouts.app')
@section('title','This is User Page')

@section('content')
    <div class="content_area">
    		<div class="table-area">
	    			<div class="table-header mb-3">
	    				@if(Session('success'))
				 	 		<div class="alert alert-success">{{ Session('success') }}</div>
				 	    @endif

	    				<a href="{{route('register')}}">Registration</a>
	    				 <h3>{{$headline}}</h3>
	    			</div>
	    			 <table class="table" cellpadding="20" cellspacing="10" border="0">
	    			 		 <thead>
	    			 		 	   <th>ID</th>
	    			 		 	   <th>Name</th>
	    			 		 	   <th>Email</th>
	    			 		 	   <th>Phone</th>
	    			 		 	   <th>Address</th>
	    			 		 	   <th>Image</th>
	    			 		 	   <th>Action</th>
	    			 		 </thead>
	    			 		 <tbody>
		    			 		 	@foreach ($users as $user)
		    			 		 		<tr>
	    			 		 				<td>{{$user->id}}</td>
			    			 		 		<td>{{$user->name}}</td>
			    			 		 		<td>{{$user->email}}</td>
			    			 		 		<td>{{$user->phone}}</td>
			    			 		 		<td>{{$user->address}}</td>
			    			 		 		<td><img src=" {{asset($user->image) }}" width="80" height="80"></td>

			    			 		 		<td>
			    			 		 			<form action="{{route('users.destroy',['user'=>$user->id]) }}" method="post">

			    			 		 			<a href="{{route('users.show',['user'=>$user->id]) }}"><i class="fa fa-eye"></i></a>

			    			 		 			<a href="{{route('users.edit',['user'=>$user->id]) }}"><i class="fa fa-edit"></i></a>
			    			 		 			
			    			 		 				@csrf
			    			 		 				@method('DELETE')
			    			 		 				<button onclick="return confirm('Are You Sure !')"><i class="fa fa-trash"></i></button>
			    			 		 			</form>

			    			 		 		</td>
			    			 		 	</tr>
		    			 		 	@endforeach
	    			 		 </tbody>
	    			 </table>
	    			
    		</div>
		</div>
@endsection

