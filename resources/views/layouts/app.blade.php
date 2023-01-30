<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title','This is Default Title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap5.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	{{-- Fontawesome --}}
	<script src="https://kit.fontawesome.com/34eb7c7267.js" crossorigin="anonymous"></script>

</head>
<body>
	<section class="container">
		<header class="header">
			<h2>This is Header</h2>
		</header>

			@yield('content')

		<footer class="footer">
			<p class="text-center">&copy; All Right Reservid 2022 | Mahmudul Hasan</p>
		</footer>
	</section>

	<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>