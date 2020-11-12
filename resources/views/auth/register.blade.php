
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
  <link rel="stylesheet" href="{{asset("plantilla/vendor/@fortawesome/fontawesome-free/css/all.min.css")}}" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset("plantilla/css/argon.css?v=1.1.0")}}" type="text/css">
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
            <div class="col-xl-5 col-lg-6 col-md-8 px-5" style="margin-top: -9%;">
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
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0"  style="top: -147px;">
            <div class="card-header bg-transparent pb-5" style="padding-bottom: 1rem !important;" >
              
              <img src="{{asset("plantilla/img/theme/isotipo.png")}}" style="height: 70px;margin-left: 199px;">
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <h3>Ingresa tus datos</h3>
              </div>
              <form role="form"  method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre" required >
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                </div>
                </div>
                <input name="role" value="colaborador" hidden>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Correo" required>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                      </div>
                      <input class="form-control datepicker" id="datepickers" name="cumpleanios" placeholder="Select date" type="text">
                  </div>
              </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input placeholder="Contraseña" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña"  required>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input  id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña" required>
                  </div>
                </div>
                
    
                  <div class="row my-4">
                  <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                      <label class="custom-control-label" for="customCheckRegister">
                        <span class="text-muted">Estoy de acuerdo con la<a href="#!"> Política de privacidad</a></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="text-center" style="margin-right: 38%;">
                  <button type="submit" class="btn btn-primary mt-4">Crear cuenta</button>
                </div>
                <div class="text-center" style="margin-top: -15%;margin-left: 25%;" >
                  <a href="{{ url('/') }}" class="btn btn-danger mt-4">Cancelar</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @ends
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