<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Registrarse</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset("plantilla/img/theme/isotipo.png")}}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset("plantilla/vendor/nucleo/css/nucleo.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("plantilla/vendor/@fortawesome/fontawesome-free/css/all.min.css")}}"
        type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset("plantilla/css/argon.css?v=1.1.0")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("css/registro.css")}}" type="text/css">
</head>
@section('content')

<body class="bg-default" style="background: linear-gradient(87deg, #002a60 0%,rgb(31 34 37) 100%) !important;">
    <div id="particles-js"> </div>
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header  py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5" style="margin-top: -9em;" id="titulo1">
                            <h1 class="text-white">¡Crea tu cuenta!</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <!-- Table -->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8" style="margin-top: -12em;" id="contenedor2">
                    <div class="card bg-secondary border-0">
                        <div class="card-header bg-transparent" style="margin-left: auto; margin-right:auto; ">
                            <img src="{{asset("plantilla/img/theme/isotipo.png")}}" style="height: 70px;">
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-2">
                                <h3>Ingresa tus datos</h3>
                            </div>
                            <form role="form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                        <input id="name" type="text" class="form-control" name="name"
                                            value="{{ old('name') }}" placeholder="Nombre" autofocus>
                                    </div>
                                    @if ($errors->has('name'))
                                    <strong class="text-danger tamano">{{ $errors->first('name') }}</strong>
                                    @endif
                                </div>
                                <input name="role" value="colaborador" hidden>
                                <input name="Rol_Id_Rol" value="2" hidden>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input id="email" type="email" class="form-control" name="email"
                                            value="{{ old('email') }}" placeholder="Correo electronico"
                                            pattern="^[a-zA-Z0-9_.+-]+@(?:(?:[a-zA-Z0-9-]+\.)?[a-zA-Z]+\.)?(montechelo)\.com.co$">
                                    </div>
                                    @if ($errors->has('email'))
                                    <strong class="text-danger  tamano">{{ $errors->first('email') }}</strong>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input class="form-control datepicker" id="datepickers" name="cumpleanios"
                                            placeholder="Fecha de nacimiento" type="text">
                                    </div>
                                    @if ($errors->has('cumpleanios'))
                                    <strong class="text-danger   tamano">{{ $errors->first('cumpleanios') }}</strong>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input placeholder="Contraseña" id="txtPassword" type="password"
                                            class="form-control" name="password" placeholder="Contraseña"
                                            oncopy="return false" onpaste="return false">
                                    </div>
                                    @if ($errors->has('password'))
                                    <strong class="text-danger tamano">{{ $errors->first('password') }}</strong>
                                    @endif
                                    <div id="strengthMessage"></div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" placeholder="Confirmar contraseña"
                                            oncopy="return false" onpaste="return false">
                                    </div>
                                </div>

                                <div class="btn-group-toggle">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary mt-4">Crear cuenta</button>
                                        <a href="{{ url('/') }}" class="btn btn-danger mt-4">Cancelar</a>
                                    </div>
                                </div>




                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            @media (max-width:991px) {
                #titulo1 {
                    margin-top: -5em !important;
                }

                #contenedor2 {
                    margin-top: -6em !important;
                }
            }
        </style>

    </div>

    <script src="{{asset("plantilla/vendor/jquery/dist/jquery.min.js")}}"></script>
    <script src="{{asset("plantilla/vendor/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("plantilla/vendor/js-cookie/js.cookie.js")}}"></script>
    <script src="{{asset("plantilla/vendor/jquery.scrollbar/jquery.scrollbar.min.js")}}"></script>
    <script src="{{asset("plantilla/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js")}}"></script>
    <!-- Argon JS -->
    <script src="{{asset("plantilla/js/argon.js?v=1.1.0")}}"></script>
    <!-- Demo JS - remove this in your project -->
    <script src="{{asset("plantilla/js/demo.min.js")}}"></script>
    <script src="{{asset("plantilla/particles/particles.min.js")}}"></script>
    <script src="{{asset("plantilla/particles/app.js")}}"></script>
    <script src="{{asset("plantilla/vendor/moment/min/moment.min.js")}}"></script>
    <script src="{{asset("plantilla/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")}}"></script>
    <script>
        $(function () {
         $('#datepickers').datepicker({
          // format: 'YYYY-MM-DD',
         });
     });
    </script>
    <script src="{{asset("js/seguridadPassword.js")}}"></script>


</body>
</html>
