<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>Moxi</title>
		<link rel="shortcut icon" href="img/logotipo.png">
		<link rel="stylesheet" type="text/css" href="{{asset('css/moxi.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/moxi1.css')}}">
		<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
		<link href="{{asset('css/animate-custom.css')}}" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
		
    
	</head>
	<body id="body">
		<header>
		<div class="container">
			<div class="row">

				<div class=" logo col-xs-2 animated bounceInDown">
					<img src="img/logotipo1.png">		
				</div>
				

				<div class="social col-xs-8">
						<div class="lista animated bounceInDown">
							<span>Síguenos</span>
							<button class="facebook btn btn-primary fa fa-facebook-square fa-2x"></button>
							<button class="twitter btn btn-info fa fa-twitter fa-2x"></button>
							<button class="google btn btn-danger fa fa-google-plus fa-2x"></button>
						</div>
					
					   
				</div>

		                       
	
				<div class="avatar col-xs-2 animated bounceInDown">
					<img src="img/avatar.jpg">
					<p>User</p>
					<a href="{{url('logout')}}">Cerrar sesion</a>
				</div>

			</div>
		</div>
		
	</header>


	<div class="container">
		<div class="row">
			<ul class="menu nav nav-tabs nav-justified">
							<li class="active"><a href="#">Tiendas</a></li>
							<li><a href="{{url('descuentos')}}">Descuentos & Promociones</a></li>
				  			<li class="dropdown">
				                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categoria<i class="fa fa-angle-down"></i></a>
				                            <ul class="dropdown-menu">
				                                <li><a href="hombres.html">Hombre</a></li>
				                                <li><a href="mujeres.html">Mujere</a></li>
				                                <li><a href="#">Niños</a></li>
				                                <li><a href="#">Baby</a></li>
				                            </ul>
				           	</li>
					 
							
								
				</ul>

		</div>		
	</div>

	@yield('content')

	<footer>
		<div class="row">
			<h1>© 2015-Moxie</h1>
		</div>
	</footer>
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	</body>
</html>