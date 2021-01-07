<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<?php
$page = Illuminate\Support\Facades\DB::table('settings-page')->select('*')->first();
?>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Montechelo</title>
	  <!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700">

	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{$page->logoisotipo}}" type="image/png">
	<!-- Fonts and icons -->
	<script src="{{asset("plantillaAdmin/assets/js/plugin/webfont/webfont.min.js")}}"></script>

	<script>
		WebFont.load({
			google: {
				"families": ["Open+Sans:300,400,600,700"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
				urls: ['{{asset("plantillaAdmin/assets/css/fonts.css")}}']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!-- CSS Files -->
	<?php
	$page = Illuminate\Support\Facades\DB::table('settings-page')->select('*')->first();
	?>
	<link rel="stylesheet" href="{{asset("plantillaAdmin/assets/css/bootstrap.min.css")}}">
	<link rel="stylesheet" href="{{asset("plantillaAdmin/assets/css/azzara.css")}}">

</head>
<body>
	<div class="wrapper">
		<div class="main-header" data-background-color="purple">
			<!-- Logo Header -->
			<div class="logo-header">

				<a href="{{url('HomeAdmin')}}" class="logo">
					<h1 style="color:white;    color: white;
					font-size: 20px;
					margin-top: 16px;">ADMINISTRADOR</h1>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>

			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item active">
							<a href="{{url('home')}}">
								<i class="fas fa-home" style="font-size: 17px;
                                margin-right: 9px;
                                margin-top: 8px;
                                color: aliceblue;"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="{{Auth::user()->photo}}" class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<li>
									<div class="user-box">
										<div class="avatar-lg"><img src="{{Auth::user()->photo}}" alt="image profile" class="avatar-img rounded"></div>
										<div class="u-text">
											<h4>{{Auth::user()->name}} {{Auth::user()->lastname}}</h4>
											<p class="text-muted">{{Auth::user()->email}}</p>
										</div>
									</div>
								</li>
								<li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="{{ url('perfil')}}">Mi Perfil</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Cerrar sesion</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</li>
							</ul>
						</li>

					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">

					<ul class="nav">
						<li class="nav-item ">
							<a href="{{ url('admin/HomeAdmin')}}">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Componentes</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-users"></i>
								<p>Usuarios</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{url('admin/usuario')}}">
											<span class="sub-item">Lista</span>
										</a>
									</li>
									<li>
										<a href="{{url('admin/permisoslista')}}">
											<span class="sub-item">Permisos</span>
										</a>
									</li>

								</ul>
							</div>
						</li>
						<li class="nav-item ">
							<a href="{{url('admin/novedad')}}">
								<i class="fas fa-hotel"></i>
								<p>Novedades</p>
							</a>
						</li>
						<li class="nav-item ">
							<a href="{{url('admin/solicitud')}}">
								<i class="fas fas fa-hand-holding"></i>
								<p>Solicitudes</p>
							</a>
						</li>
						<li class="nav-item ">
							<a href="{{url('admin/buzonAdmin')}}">
								<i class="fas fa-paper-plane"></i>
								<p>Buzon</p>
							</a>
						</li>
						<li class="nav-item ">
							<a href="{{url('admin/eventos')}}">
								<i class="fas fa-calendar-alt"></i>
								<p>Eventos</p>
							</a>
						</li>
						<li class="nav-item ">
							<a href="{{url('admin/noticia')}}">
								<i class="fas fa-newspaper"></i>
								<p>Noticias
								</p>
							</a>
						</li>
						<li class="nav-item ">
							<a href="{{url('admin/capacitaciones')}}">
								<i class="fas fa-chalkboard-teacher"></i>
								<p>Capacitaciones
								</p>
							</a>
						</li>
						<li class="nav-item ">
							<a href="{{url('admin/pasuasAdmin')}}">
								<i class="fas fa-child"></i>
								<p>Pauas activas
								</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Sistema de gestión de contenidos</h4>
						</li>
						<?php
						$page = Illuminate\Support\Facades\DB::table('settings-page')->select('*')->first();
						?>
						<li class="nav-item ">
							<a href="{{route('editarpage',$page->id)}}">
								<i class="fas fa-cogs"></i>
								<p>General
								</p>
							</a>
						</li>
						<li class="nav-item ">
							<a href="{{url('admin/logsAdmin')}}">
								<i class="fas fa-cubes"></i>
								<p>Logs del sistema</p>
							</a>
						</li>
						<li class="nav-item ">
							<a href="{{url('admin/AnunciosAdmin')}}">
								<i class="fas fa-bullhorn"></i>
								<p>Anuncios</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
		@yield('contents')
		<!-- Custom template | don't include it in your project! -->
		<!-- End Custom template -->
	</div>
	</div>
	<!--   Core JS Files   -->
	<script src="{{asset("plantillaAdmin/assets/js/core/jquery.3.2.1.min.js")}}"></script>
	<script src="{{asset("plantillaAdmin/assets/js/core/popper.min.js")}}"></script>
	<script src="{{asset("plantillaAdmin/assets/js/core/bootstrap.min.js")}}"></script>

	<!-- jQuery UI -->
	<script src="{{asset("plantillaAdmin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js")}}"></script>
	<script src="{{asset("plantillaAdmin/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js")}}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{asset("plantillaAdmin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js")}}"></script>

	<!-- Moment JS -->
	<script src="{{asset("plantillaAdmin/assets/js/plugin/moment/moment.min.js")}}"></script>

	<!-- Chart JS -->
	<script src="{{asset("plantillaAdmin/assets/js/plugin/chart.js/chart.min.js")}}"></script>

	<!-- jQuery Sparkline -->
	<script src="{{asset("plantillaAdmin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js")}}"></script>

	<!-- Chart Circle -->
	<script src="{{asset("plantillaAdmin/assets/js/plugin/chart-circle/circles.min.js")}}"></script>

	<!-- Datatables -->
	<script src="{{asset("plantillaAdmin/assets/js/plugin/datatables/datatables.min.js")}}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{asset("plantillaAdmin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js")}}"></script>

	<!-- Bootstrap Toggle -->
	<script src="{{asset("plantillaAdmin/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js")}}"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{asset("plantillaAdmin/assets/js/plugin/jqvmap/jquery.vmap.min.js")}}"></script>

	<script src="{{asset("plantillaAdmin/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js")}}"></script>

	<!-- Sweet Alert -->
	<script src="{{asset("plantillaAdmin/assets/js/plugin/sweetalert/sweetalert.min.js")}}"></script>

	<!-- Azzara JS -->
	<script src="{{asset("plantillaAdmin/assets/js/ready.min.js")}}"></script>

	@yield('js')
</body>

</html>