<!DOCTYPE html>
<html>
<?php
    $page = Illuminate\Support\Facades\DB::table('settings-page')->select('*')->first();
    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Cambiar contraseña</title>

  <!-- Favicon -->
  <link rel="icon" href="{{$page->logoisotipo}}" type="image/png">

    <!-- Fonts -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('plantilla/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('plantilla/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('plantilla/css/argon.css?v=1.1.0') }}" type="text/css">

<body class="bg-default"
style="overflow-y: hidden; background: linear-gradient(87deg, #002a60 0%,rgb(31 34 37) 100%) !important;">
    <!-- Navbar -->
    <div id="particles-js"> </div>
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header  py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5" style="margin-top: -9%;">
                            <h1 class="text-white">Restablecer contraseña</h1>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0" style="top: -147px;">
                        <div class="card-header bg-transparent pb-5"
                                style="padding-bottom: 1rem !important; margin-left: auto; margin-right:auto; ">
                                <img src="{{$page->logologin}}" style="height: 70px;">
                            </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if (session('Pageedit'))
                            <div class="alert alert-warning" role="alert">
                                {{(session('Pageedit'))}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
        
                                <input type="hidden" name="token" value="{{ $token }}">
                                 <div class="form-group mb-3">
                                  
                                    <label>Correo</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            placeholder="Tucorreo@example.com" value="{{ $email ?? old('email') }}"
                                            required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div><br>
                                    <div class="form-group mb-3">
                                        <label>Contraseña</label>

                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input id="password" type="password" placeholder="Contraseña"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div><br>
                                        <div class="form-group mb-3">
                                            <label>Confirmar contraseña</label>

                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                                </div>
                                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirmar contraseña"
                                                    name="password_confirmation" required autocomplete="new-password">
                                            </div>

                                        </div>
                                        <div class="text-center" style="margin-right: 38%;">
                                            <button type="submit" class="btn btn-primary my-4">Recuperar</button>
                                        </div>
                                        <div class="text-center" style="margin-top: -26%;margin-left: 40%;">
                                            <a href="{{ url('/') }}" class="btn btn-danger mt-4">Cancelar</a>
                                        </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('plantilla/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('plantilla/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plantilla/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('plantilla/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('plantilla/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('plantilla/js/argon.js?v=1.1.0') }}"></script>
    <!-- Demo JS - remove this in your project -->
    <script src="{{ asset('plantilla/js/demo.min.js') }}"></script>

    <script src="{{ asset('plantilla/particles/particles.min.js') }}"></script>
    <script src="{{ asset('plantilla/particles/app.js') }}"></script>
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
