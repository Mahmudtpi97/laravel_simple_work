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
	<section class="main-area">
        <header class="header">
            <div class="container">
                <h2 class="text-center">This is Header</h2>
            </div>
		</header>
        <div class="container">
			  @yield('content')
        </div>
		<footer class="footer">
            <div class="container">
			   <p class="text-center">&copy; All Right Reservid 2022 | Mahmudul Hasan</p>
            </div>
		</footer>
	</section>

	{{-- <script type="text/javascript" src="{{asset('js/script.js')}}"></script> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.6/axios.min.js"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap/js/bootstrap.min.js')}}"></script>
    @yield('scripts')
</body>
</html>
