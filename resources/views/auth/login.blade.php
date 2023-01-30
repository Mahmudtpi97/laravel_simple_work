<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap5.min.css')}}">
</head>
<body>
 <div class="register-area col-md-6 m-4 p-4 bg-info">
 	 <h4>Login Form</h4>
	 	 @foreach ($errors->all() as $error)
	 	 	<li class="text-danger">{{$error}}</li>
	 	 @endforeach
 	 <div class="registration col-md-6 ">
	 	  <form action="login" method="POST">
		 		@csrf
		 		<div class="form-group mt-3">
		 			<label for="email">Email:</label>
		 			<input type="email" name="email" class="form-control">
		 		</div>

		 		<div class="form-group mt-3">
		 			<label for="password">Password:</label>
		 			<input type="text" name="password" class="form-control">
		 		</div>
		 		<div class="form-group mt-3">
		 			<input type="submit" value="Login" class="btn btn-success">
		 		</div>
	 	  </form>
	 </div>
 </div>

</body>
</html>