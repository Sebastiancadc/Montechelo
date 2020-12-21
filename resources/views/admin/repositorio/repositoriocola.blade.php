<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
<link rel="icon" href="{{asset("plantilla/img/theme/isotipo.png")}}" type="image/png">
<title>Montechelo </title>
<nav class="navbar navbar-horizontal navbar-expand-lg navbar-dark bg-default">
    <div class="container">
        <div style="margin-left: -66px;font-size: 19px;">
            <a href="{{ url('home')}}" class="mb-0 text-sm  font-weight-bold" style="    color: white;">Montechelo </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-default">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="#">
                        <i class="fas fa-heart"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="#">
                        <i class="fas fa-bell"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ url('home')}}">
                        <i class="fas fa-home"></i>
                    </a>
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
                                <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }} {{Auth::user()->lastname}}</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Bienvenido!</h6>
                        </div>
                        <a href="{{ url('perfil')}}" class="dropdown-item">
                            <i class="fas fa-user"></i>
                            <span>Mi perfil</span>
                        </a>
                        <a href="#!" class="dropdown-item">
                            <i class="fas fa-cog"></i>
                            <span>Ajustes</span>
                        </a>
                        <a href="#!" class="dropdown-item">
                            <i class="fas fa-calendar-minus"></i>
                            <span>Activity</span>
                        </a>
                        <a href="#!" class="dropdown-item">
                            <i class="fas fa-life-ring"></i>
                            <span>Support</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="dropdown-item">
                            <i class="fas fa-running"></i>
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
<div style="height: 655x;">
    <div id="fm"></div>
</div>
@include('admin.modales.modalCampos')
{{-- @include('admin.modales.modalPausas') --}}
<script src="https://cdn.rawgit.com/jackmoore/colorbox/master/jquery.colorbox-min.js"></script>
<script src="{{asset("pausasacitvas/pausas.js")}}"></script>
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
<script src="{{asset("plantilla/vendor/jquery/dist/jquery.min.js")}}"></script>
<script src="{{asset("plantilla/vendor/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>

<style>
    .btn-secondary {
        color: #fff;
        background-color: #002A60 !important;
        border-color: #002A60 !important;
    }

    .btn-secondary.disabled,
    .btn-secondary:disabled {
        color: #fff;
        background-color: #000000;
        border-color: #000000;
    }

    .bg-default {
        background-color: #172b4d !important;
    }

    @media (min-width: 992px) .navbar-expand-lg {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }

    .navbar {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        padding: -0.5rem 1rem;
        color: rgba(255, 255, 255, .95);
    }

    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, .95);
    }

    .align-items-center {
        align-items: center !important;
        margin-right: -43px;
    }

    .rounded-circle,
    .avatar.rounded-circle img {
        border-radius: 50% !important;
    }

    .avatar img {
        width: 100%;
        border-radius: .375rem;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    .avatar-sm {
        font-size: .875rem;
        width: 36px;
        height: 36px;
    }

    .avatar {
        font-size: 1rem;
        display: inline-flex;
        width: 35px;
        height: 32px;
        color: #fff;
        border-radius: .375rem;
        background-color: #adb5bd;
        align-items: center;
        justify-content: center;
    }
</style>