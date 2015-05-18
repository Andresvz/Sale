<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="shortcut icon" href="img/logotipo.png"> 
		<title>Login</title>
	    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
	    <link href="{{asset('css/login.css')}}" rel="stylesheet">
	    <link href="{{asset('css/animate-custom.css')}}" rel="stylesheet">
	    <style type="text/css">
	    	.cont{
	    		margin: 0 auto;
	    		margin-top:  80px;
	    	}
	    	#video-background {
    		height: 100%;
    		position: fixed;
    		width: 100%;
    		z-index: -100;
			}
			#contacto{
				color: #fff;
			}
	    </style>

	</head>
	<body>
		<!--<iframe id="video-background" width="560" height="315" src="//www.youtube.com/embed/Xxus7tBHxtc?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1&amp;html5=1&amp;allowfullscreen=true&amp;wmode=transparent" frameborder="0" allowfullscreen></iframe>-->
		@yield('content')
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	</body>
</html>
