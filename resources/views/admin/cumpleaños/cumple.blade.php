<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<?php
	$page = Illuminate\Support\Facades\DB::table('settings-page')->select('*')->first();
	?>
<head>
	<title>Feliz Cumpleaños</title>
	<meta charset="UTF-8" />
	<!-- Favicon -->
	<link rel="icon" href="{{$page->logoisotipo}}" type="image/png">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset("cumpleanios/css/stylesheet.css")}}">
	<link rel="stylesheet" type="text/css" href="{{asset("cumpleanios/css/loading.css")}}">
	<link href='http://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>
	<link rel="stylesheet/less" href="{{asset("cumpleanios/css/cake.less")}}">
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.1.0/less.min.js"></script>
</head>
@include('admin.cumpleaños.style')
<body>
	<div id="particles-js"> </div>
	<div class="loading"></div>
	<audio class="song" controls loop>
		<source src="{{asset("cumpleanios/css/hbd.mp3")}}">
		</source>
	</audio>
	<div class="balloons text-center" id="b1">
		<h2 style="color:#F2B300;">F</h2>
	</div>
	<div class="balloons text-center" id="b2">
		<h2 style="color: #1f59a1;">E</h2>
	</div>
	<div class="balloons text-center" id="b3">
		<h2 style="color:#D14D39;">L</h2>
	</div>
	<div class="balloons text-center" id="b4">
		<h2 style="color:#23DD1E;">I</h2>
	</div>
	<div class="balloons text-center" id="b5">
		<h2 style="color:#63479b;">Z</h2>
	</div>
	<div class="balloons text-center" id="b6">
		<h2 style="color:#e12424;">D</h2>
	</div>
	<div class="balloons text-center" id="b7">
		<h2 style="color:#20CFB4;">Í</h2>
	</div>
	<div class="balloons text-center" id="b8">
		<h2 style="color:#be1682;">A</h2>
	</div>
	<img src="{{asset("cumpleanios/globos/Balloon-Border.png")}}" width="100%" class="balloon-border">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-xs-2 bulb-holder">
				<div class="bulb" id="bulb_yellow"></div>
			</div>
			<div class="col-md-2 col-xs-2 bulb-holder">
				<div class="bulb" id="bulb_red"></div>
			</div>
			<div class="col-md-2 col-xs-2 bulb-holder">
				<div class="bulb" id="bulb_blue"></div>
			</div>
			<div class="col-md-2 col-xs-2 bulb-holder">
				<div class="bulb" id="bulb_green"></div>
			</div>
			<div class="col-md-2 col-xs-2 bulb-holder">
				<div class="bulb" id="bulb_pink"></div>
			</div>
			<div class="col-md-2 col-xs-2 bulb-holder">
				<div class="bulb" id="bulb_orange"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<img src="{{asset("cumpleanios/bombillos/banner.png")}}" class="bannar">
			</div>
		</div>
		<div class="row cake-cover">
			<div class="col-md-12 texr-center">
				<div class="cake">
					<div class="velas">
						<div class="fuego"></div>
						<div class="fuego"></div>
						<div class="fuego"></div>
						<div class="fuego"></div>
						<div class="fuego"></div>
					</div>
					<div class="cobertura"></div>
					<div class="bizcocho"></div>
				</div>
			</div>
		</div>
		<div class="row message">
			<div class="col-md-12">
				<p>Trabajar contigo...</p>
				<p>es un aprendizaje constante.</p>
				<p>Gracias por darnos tu apoyo</p>
				<p>y esfuerzo.</p>
				<p>Esta empresa </p>
				<p>no sería la misma sin ti.</p>
				<p>¡Feliz cumpleaños!</p>
			</div>
		</div>
		<div class="navbar navbar-fixed-bottom">
			<div class="row">
				<div class="col-md-6 text-center col-md-offset-3">
					<button class="btn btn-primary" id="turn_on">Enciende las luces</button>
					<button class="btn btn-primary" id="play">Reproducir musica</button>
					<button class="btn btn-primary" id="bannar_coming">Vamos a decorar</button>
					<button class="btn btn-primary" id="balloons_flying">Soltar globos</button>
					<button class="btn btn-primary" id="cake_fadein">Ahora vamos con el pastel!</button>
					<button class="btn btn-primary" id="light_candle">Enciende la vela</button>
					<button class="btn btn-primary" id="wish_message">Feliz cumpleaños</button>
					<button class="btn btn-primary" id="story">Un mensaje para ti</button>
					<a href="http://localhost/Montechelo/public/home" class="btn btn-primary" id="tenkyu" style="display: none;" >Gracias!</a>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="{{asset("cumpleanios/js/effect.js")}}"></script>
<script src="{{asset("cumpleanios/js/particles.min.js")}}"></script>
<script src="{{asset("cumpleanios/js/app.js")}}"></script>
<style>
	#particles-js {
		height: 100vh;
		width: 100%;
		position: fixed;
		z-index: -1;
	}
</style>
<script>
	(function (i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date(); a = s.createElement(o),
			m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
	})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
	ga('create', 'UA-58229732-1', 'auto');
	ga('send', 'pageview');
</script>
</html>