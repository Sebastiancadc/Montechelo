<!DOCTYPE html>
<html>
<?php
$page = Illuminate\Support\Facades\DB::table('settings-page')->select('*')->first();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Favicon -->
    <link rel="icon" href="{{$page->logoisotipo}}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset("plantilla/vendor/nucleo/css/nucleo.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("plantilla/vendor/@fortawesome/fontawesome-free/css/all.min.css")}}" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset("plantilla/css/argon.css?v=1.1.0")}}" type="text/css">
</head>

<body class="bg-default" style="overflow-y: hidden; background: linear-gradient(87deg, #002a60 0%, rgb(31 34 37) 100%) !important;">
    <!-- Navbar -->
    <div id="particles-js"> </div>
    <!-- Main content -->

    <div class="main-content">
        <style>
            @media only screen and (max-width: 700px) {
                .main-content {
                    margin-top: 110px;
                }
            }
        </style>
        <!-- Header -->
        <!-- bg-gradient-primary -->

        <div class="header  py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5" style="margin-top: -12%; margin-left: auto; margin-right:auto">
                            <h1 class="text-white">¡Bienvenido!</h1>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0" style="top: -190px;">
                        <div class="card-header bg-transparent pb-5" style="padding-bottom: 1rem !important; margin-left: auto; margin-right:auto;">
                        <img src="{{$page->logologin}}" style="height: 70px;">
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <h3>Ingresa tus datos</h3>
                            </div>
                            <form role="form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input id="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email" type="email" autofocus>
                                    </div>  
                                    @if ($errors->has('email'))
                                    <strong class="text-danger tamano">{{ $errors->first('email') }}</strong>
                                    @endif  
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" type="password" >
                                    </div>
                                    @if ($errors->has('password'))
                                    <strong class="text-danger tamano">{{ $errors->first('password') }}</strong>
                                    @endif 
                                </div>
                                <div class="text-center">

                                    <button type="submit" class="btn btn-primary my-4">Ingresar</button>

                                </div>
                               <div class="copyright text-center text-lg-left text-muted">
                               <a style="color: #5e72e4;" class="font-weight-bold ml-1" >Creado por grupo 3 Sena Montechelo.</a>
                              </div>
                            </form>
                        </div>
                    </div>

                    <div class="row" style="margin-top: -185px;">
                        <div class="col-6">

                            <a href="{{ route('password.request')}}" class="text-light"><small>Olvidaste la contraseña?</small></a>
                        </div>

                        <div class="col-6 text-right">
                            <a href="{{ route('register') }}" class="text-light"><small>Crear nueva cuenta</small></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Argon Scripts -->
    <!-- Core -->
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
</body> 
<style>
    #particles-js {
        height: 100vh;
        width: 100%;
        position: fixed;
        z-index: -1;
    }
</style>

</html>