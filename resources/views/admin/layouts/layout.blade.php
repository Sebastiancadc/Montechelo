<!DOCTYPE html>
<html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<?php
$user = auth()->user();
$rol = auth()->user()->role;
$colaborador = Illuminate\Support\Facades\DB::table('rol')->select('*')->where('Roles', '=', $rol)->first();
$page = Illuminate\Support\Facades\DB::table('settings-page')->select('*')->first();
$chat = Illuminate\Support\Facades\DB::table('messages')->select('*')->first();
$connt = Illuminate\Support\Facades\DB::table('messages')->select('seen')->whereto_id(Auth::user()->id)->count();
$ids = Auth::user()->id;
$conntss = Illuminate\Support\Facades\DB::select("SELECT seen FROM messages WHERE to_id = '$ids' AND seen = 0");
$horas = Illuminate\Support\Facades\DB::select("SELECT MAX(created_at) as created_at FROM messages WHERE to_id = '$ids'");
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <!-- Favicon -->
  <link rel="icon" href="{{$page->logoisotipo}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset("plantilla/vendor/nucleo/css/nucleo.css")}}" type="text/css">
  <link rel="stylesheet" href="{{asset("plantilla/vendor/@fortawesome/fontawesome-free/css/all.min.css")}}" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="{{asset("plantilla/css/jquery-ui.css")}}">
  <link rel="stylesheet" href="{{asset("plantilla/vendor/fullcalendar/dist/fullcalendar.min.css")}}">
  <link rel="stylesheet" href="{{asset("plantilla/vendor/sweetalert2/dist/sweetalert2.min.css")}}">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset("plantilla/css/argon.css?v=1.1.0")}}" type="text/css">
  <!-- Modo Oscuro CSS -->
  <link rel="stylesheet" href="{{asset("plantilla/css/dark.css")}}" type="text/css">
  <link rel="stylesheet" href="{{asset("plantilla/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css")}}">
  <link rel="stylesheet" href="{{asset("plantilla/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css")}}">
  <link rel="stylesheet" href="{{asset("plantilla/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css")}}">

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <title>Montechelo </title>
</head>

<body>
  {{-- @include('admin.modales.anuncios') --}}
  @include('admin.configuracionweb.css2')
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light " id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="{{url("home")}}">
          <img src="{{$page->logonav}}" id="imagenmenuleft" class="navbar-brand-img" style="margin-top: -7px;
          max-width: 126%;
          max-height: 10rem;">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item"></li>
            <a class="nav-link" href="{{ url('home')}}">
              <i class="ni ni-shop text-primary"></i>
              <span class="nav-link-text">Inicio</span>
            </a>
            </li>
            @if ($colaborador->chat_status == '1')
            <li class="nav-item">
              <a class="nav-link" href="{{ url('Chatmontechelo')}}">
                <i class="ni ni-chat-round text-orange"></i>
                <span class="nav-link-text">Chat</span>
              </a>
            </li>
            @endif
            @if ($colaborador->directorio_status == '1')
            <li class="nav-item">
              <a class="nav-link" href="{{url("directorio")}}">
                <i class="ni ni-badge text-info"></i>
                <span class="nav-link-text">Directorio</span>
              </a>
            </li>
            @endif
            @if ($colaborador->talento_status == '1')
            <li class="nav-item">
              <a class="nav-link" href="{{url('talento')}}">
                <i class="ni ni-archive-2 text-black"></i>
                <span class="nav-link-text">Talento Humano</span>
              </a>
            </li>
            @endif
            @if ($colaborador->repositorio_status == '1')
            <li class="nav-item">
              <a class="nav-link" href="{{url("repositoriocola")}}">
                <i class="ni ni-folder-17 text-pink"></i>
                <span class="nav-link-text">Repositorio</span>
              </a>
            </li>
            @endif
            @if ($colaborador->calendario_status == '1')
            <li class="nav-item">
              <a class="nav-link" href="{{url("calendar")}}">
                <i class="ni ni-calendar-grid-58 text-red"></i>
                <span class="nav-link-text">Calendario</span>
              </a>
            </li>
            @endif
            @if ($colaborador->solicitud_status == '1')
            <li class="nav-item">
              <a class="nav-link" href="{{url('solicitudesd')}}">
                <i class="ni ni-notification-70 text-green"></i>
                <span class="nav-link-text">Solicitudes y trámites</span>
              </a>
            </li>
            @endif
            @if ($colaborador->buzon_status == '1')
            <li class="nav-item">
              <a class="nav-link" href="{{url("buzonusu")}}">
                <i class="ni ni-send text-yellow"></i>
                <span class="nav-link-text">Buzón de sugerencias</span>
              </a>
            </li>
            @endif
            @if ($colaborador->plan_status == '1')
            <li class="nav-item">
              <a class="nav-link" href="{{url("planestrategico")}}">
                <i class="ni ni-building text-orange"></i>
                <span class="nav-link-text">Plan estratégico</span>
              </a>
            </li>
            @endif
            @if ($colaborador->novedad_status == '1')
            <li class="nav-item">
              <a class="nav-link" href="{{url('crearnovedad')}}">
                <i class="ni ni-building text-purple"></i>
                <span class="nav-link-text">Novedad</span>
              </a>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge" style="height: 42px;
              width: 334px;">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <select class="js-example-basic-single" name="state" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                  <option value="">Buscar...</option>
                  <option value="{{url('Chatmontechelo')}}">Chat</option>
                  <option value="{{url("directorio")}}">Directorio</option>
                  <option value="{{url('talento')}}">Talento humano</option>
                  <option value="{{url("repositoriocola")}}">Repositorio</option>
                  <option value="{{url("calendar")}}">Calendario</option>
                  <option value="{{url('solicitud')}}">Solicitud</option>
                  <option value="{{url("buzonusu")}}">Buzon de sugerencias</option>
                  <option value="{{url("planestrategico")}}">Plan estrategico</option>
                  <option value="{{url('crearnovedad')}}">Novedad</option>
                </select>
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <button class="switch" id="switch">
              <span><i class="fas fa-sun" style="15px"></i></span>
              <span><i class="fas fa-moon" style="15px"></i></span>
            </button>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-chat-round"></i>
                <span>
                  @if (count($conntss) == 0)
                  @else
                  <span class="badge badge-danger circulorojo">.
                  </span>
                  @endif
                </span>
              </a>
              <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">Tienes <strong class="text-primary">{{count($conntss)}}</strong> Mensajes.
                  </h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  @if (count($conntss) == 0)
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-comment-slash" style="font-size: 23px;"></i>
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>

                          </div>
                          <div class="text-right text-muted">
                            <small>--</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">No tienes mensajes</p>
                      </div>
                    </div>
                  </a>
                  @else
                  <a href="{{url('Chatmontechelo')}}" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <div class="col-auto">
                          <i class="ni ni-chat-round" style="font-size: 23px;"></i>
                        </div>
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">Chat</h4>
                          </div>
                          <div class="text-right text-muted">
                            {{-- <small>{{json_encode($horas)}}</small> --}}
                            <p></p>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Tienes un mensaje nuevo</p>
                      </div>
                    </div>
                  </a>
                  @endif
                </div>
                <!-- View all -->
                <a href="{{url('Chatmontechelo')}}" class="dropdown-item text-center text-primary font-weight-bold py-3">Ver mis mensajes</a>
              </div>
            </li>
            {{-- Notificaciones campana --}}
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
                <span>
                  @if (count(Auth::user()->unreadNotifications))
                  <span class="badge badge-danger circulorojo">.
                  </span>
                  @endif
                </span>
              </a>
              <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">Tienes
                    @if (count(Auth::user()->unreadNotifications))
                    <strong class="text-primary"> {{count(Auth::user()->unreadNotifications)}}</strong>
                    @endif notificaciones.
                  </h6>
                </div>
                <!-- List group -->
                @forelse (Auth::user()->unreadNotifications as $notificacion )
                <a href="{{$notificacion->data['link']}}" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <i class="ni {{$notificacion->data['icono']}}" style="font-size: 23px;"></i>
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <h4 class="mb-0 text-sm">{{$notificacion->data['evento']}} - {{$notificacion->data['titulo']}}</h4>
                        </div>
                        <div class="text-right text-muted">
                          <small>{{$notificacion->created_at->diffForHumans()}}</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">{{$notificacion->data['descripcion']}}</p>
                    </div>
                  </div>
                </a>
                @empty
                <a class="list-group-item list-group-item-action">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-bell-slash" style="font-size: 23px;"></i>
                  </div>
                  <div class="col ml--2">
                    <div class="d-flex justify-content-between align-items-center">
                    </div>
                    <p class="text-sm mb-0">Sin notificaciones</p>
                  </div>
                </div>
              </a>
                @endforelse
                <!-- View all -->
                <a href="{{route('leertodas')}}" style="margin-left: -7px;" class=" dropdown-item text-left text-primary font-weight-bold py-2">Marcar como leidas</a>
                <a href="{{url('Notificaciones')}}" style="margin-left: -15px;margin-top: -45px;" class=" dropdown-item text-right text-primary font-weight-bold py-3">Ver todas</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{Auth::user()->photo}}">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{Auth::user()->name}} {{Auth::user()->lastname}}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Bienvenido!</h6>
                </div>
                <a href="{{ url('perfil')}}" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>Mi perfil</span>
                </a>
                @if ($user->role=='admin')
                <a href="{{ url('admin/HomeAdmin')}}" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Administrador</span>
                </a>
                @endif
                <a href="{{ url('ayuda')}}" class="dropdown-item">
                  <i class="fa fa-bolt"></i>
                  <span>Ayuda</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Cerrar sesión </span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')
    <!-- Argon Scripts -->
    <!-- Core -->
    
    <script src="{{asset("plantilla/vendor/jquery/dist/jquery.min.js")}}"></script>
    <script src="{{asset("plantilla/vendor/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("plantilla/vendor/js-cookie/js.cookie.js")}}"></script>
    <script src="{{asset("plantilla/vendor/jquery.scrollbar/jquery.scrollbar.min.js")}}"></script>
    <script src="{{asset("plantilla/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js")}}"></script>
    <!-- Optional JS -->
    <script src="{{asset("plantilla/vendor/chart.js/dist/Chart.min.js")}}"></script>
    <script src="{{asset("plantilla/vendor/chart.js/dist/Chart.extension.js")}}"></script>
    <script src="{{asset("plantilla/vendor/moment/min/moment.min.js")}}"></script>
    <script src="{{asset("plantilla/vendor/fullcalendar/dist/fullcalendar.min.js")}}"></script>
    <script src="{{asset("plantilla/vendor/bootstrap-notify/bootstrap-notify.min.js")}}"></script>
    <!-- scripts buscador tablas -->
    <script src="{{asset("plantilla/vendor/datatables.net/js/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("plantilla/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
    <script src="{{asset("plantilla/vendor/datatables.net-buttons/js/dataTables.buttons.min.js")}}"></script>
    <script src="{{asset("plantilla/vendor/datatables.net-buttons/js/buttons.html5.min.js")}}"></script>
    <script src="{{asset("plantilla/vendor/datatables.net-buttons/js/buttons.flash.min.js")}}"></script>
    <script src="{{asset("plantilla/vendor/datatables.net-buttons/js/buttons.print.min.js")}}"></script>
    <script src="{{asset("plantilla/vendor/datatables.net-select/js/dataTables.select.min.js")}}"></script>
    @yield('jss')
    <script src="{{asset("plantilla/vendor/date/bootstrap-datetimepicker.js")}}"></script>
    <!-- Argon JS -->
    <script src="{{asset("plantilla/js/dark.js")}}"></script>
    <script src="{{asset("plantilla/js/perfil.js")}}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{asset("plantilla/js/argon.js?v=1.1.0")}}"></script>
    <script src="{{asset("plantilla/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")}}"></script>
    @yield('js')
    
    <script>
      $(document).ready(function() {
        $('.js-example-basic-single').select2();
      });
    </script>

</body>