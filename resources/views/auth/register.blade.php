<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap5.min.css')}}">
</head>
<body>
 <div class="register-area col-md-6 m-4 p-4 bg-info">
 	 <h4>Registration Form</h4>
 	
 	 @if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

 	 <div class="registration col-md-6 ">
 	 	 <form action="registration" method="POST" enctype="multipart/form-data">
	 		 @csrf

	 		 <div class="form-group mt-3">
	 			 <label for="name">Name:</label>
	 			 <input type="text" name="name" class="form-control" value="{{old('name')}}">
	 			 @error('name')
	 			    <div class="text-danger">{{$message}}</div>
	 			 @enderror
	 		 </div>
	 		 <div class="form-group mt-3">
	 			 <label for="email">Email:</label>
	 			 <input type="email" name="email" class="form-control" value="{{old('email')}}">
	 			 @error('email')
	 			 	<div class="text-danger">{{$message}}</div>
	 			 @enderror
	 		 </div>
	 		 <div class="form-group mt-3">
	 			 <label for="phone">Phone:</label>
	 			 <input type="text" name="phone" class="form-control" value="{{old('phone')}}">
	 			 @error('phone')
	 			 	<div class="text-danger">{{$message}}</div>
	 			 @enderror
	 		 </div>
	 		 <div class="form-group mt-3">
	 			 <label for="password">Password:</label>
	 			 <input type="password" name="password" class="form-control">
	 			 @error('password')
	 			 	<div class="text-danger">{{$message}}</div>
	 			 @enderror
	 		 </div> 
	 		 <div class="form-group mt-3">
	 			 <label for="address">	Address:</label>
	 			 <input type="text" name="address" class="form-control" value="{{old('address')}}">
	 			 @error('address')
	 			 	<div class="text-danger">{{$message}}</div>
	 			 @enderror
	 		 </div>
	 		 <div class="form-group mt-3">
	 			 <label for="image">Photo:</label>
	 			 <input type="file" name="image" class="form-control">
	 			 @error('image')
	 			 	<div class="text-danger">{{$message}}</div>
	 			 @enderror
	 		 </div>
	 		 <div class="form-group mt-3">
	 			<input type="submit" value="Registration" class="btn btn-success">
	 		 </div>
 	     </form>
 	 </div>
 	
 </div>

</body>
</html>