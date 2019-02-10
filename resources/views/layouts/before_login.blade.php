<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<!-- CSS -->
	<link href="{{ asset('css/Beforelogin.css') }}" rel="stylesheet">

	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>

    	<nav class="navbar navbar-expand-lg navbar-light">
    		<a href="{{route ('welcome')}}" class="navbar-brand"><img src="{{asset('images/SaagBazar.png')}}"></a>
    		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   			<span class="navbar-toggler-icon"></span>
  			</button>

    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    			<ul class="navbar-nav ml-auto">
    				<li class="nav-item">
    					<a href="{{ route ('about')}}" class="nav-link">About</a>
    				</li>
    				<li class="nav-item">
    					<a href="{{ route ('market')}}" class="nav-link">Market</a>
    				</li>
    				<li class="nav-item">
    					<a href="{{ route ('supplier')}}" class="nav-link">Suppliers</a>
    				</li>
    				<li class="nav-item">
    					<a href="{{ route ('contact') }}" class="nav-link">Contact</a>
    				</li>
    			</ul>
    		</div>
    	</nav>

	   	
	<div class="container-fluid content">
	            @yield('content')
	</div>

     
</body>
</html>