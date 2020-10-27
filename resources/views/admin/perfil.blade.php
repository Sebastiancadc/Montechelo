@extends('admin.layout')

@section('content')
<div class="header pb-6 d-flex align-items-center " <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8" style="
width: 100%;
height: 80%;"></span>
  <br>
  <br>
  <?php
  $user = auth()->user();
  ?>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">
      <div class="col-lg-7 col-md-10">
        <img src="{{asset("plantilla/img/theme/team-1.jpg")}}" class="rounded-circle" style="width: 120px; margin-top: 70px">

        <h1 class="display-2 text-white" style="font-size:30px;margin-left:140px;margin-top: -100px">{{ Auth::user()->name }} {{ Auth::user()->apellido }}</h1>
        <br>


      </div>
    </div>
  </div>
</div>



<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-4 order-xl-2">
      <div class="card card-profile">
        <img src="{{asset("plantilla/img/theme/img-1-1000x600.jpg")}}" alt="Image placeholder" class="card-img-top">
        <div class="row justify-content-center">
          <div class="col-lg-3 order-lg-2">
            <div class="card-profile-image">
              <a href="#">
                <img src="{{asset("plantilla/img/theme/team-1.jpg")}}" class="rounded-circle">
              </a>
            </div>
          </div>
        </div>
        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
          <div class="d-flex justify-content-between">
            <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
            <a href="#" class="btn btn-sm btn-default float-right">Message</a>
          </div>
        </div>
        <div class="card-body pt-0">
          <div class="row">
            <div class="col">
              <div class="card-profile-stats d-flex justify-content-center">
              </div>
            </div>
          </div>
          <div class="text-center">
            <h5 class="h3">
              {{ Auth::user()->name}}<span class="font-weight-light"><br> <?php echo calculaedad(Auth::user()->cumpleanios) ?></span>
              años
            </h5>
            <div class="h5 mt-4">
              {{ Auth::user()->email}}
            </div>

          </div>
        </div>
      </div>



      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <!-- Title -->
          <h5 class="h3 mb-0">Amigos en linea </h5>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- List group -->
          <ul class="list-group list-group-flush list my--3">
            <li class="list-group-item px-0">
              <div class="row align-items-center">
                <div class="col-auto">
                  <!-- Avatar -->
                  <a href="#" class="avatar rounded-circle">
                    <img alt="Image placeholder" src="{{asset("plantilla/img/theme/team-1.jpg")}} ">
                  </a>
                </div>
                <div class="col ml--2">
                  <h4 class="mb-0">
                    <a>Juan Manuel</a>
                  </h4>
                  <span class="text-success">●</span>
                  <small>Online</small>
                </div>

              </div>
            </li>
            <li class="list-group-item px-0">
              <div class="row align-items-center">
                <div class="col-auto">
                  <!-- Avatar -->
                  <a href="#" class="avatar rounded-circle">
                    <img alt="Image placeholder" src="{{asset("plantilla/img/theme/team-2.jpg")}} ">
                  </a>
                </div>
                <div class="col ml--2">
                  <h4 class="mb-0">
                    <a>Natalia Rodriguez</a>
                  </h4>
                  <span class="text-success">●</span>
                  <small>Online</small>
                </div>

              </div>
            </li>
            <li class="list-group-item px-0">
              <div class="row align-items-center">
                <div class="col-auto">
                  <!-- Avatar -->
                  <a href="#" class="avatar rounded-circle">
                    <img alt="Image placeholder" src="{{asset("plantilla/img/theme/team-3.jpg")}} ">
                  </a>
                </div>
                <div class="col ml--2">
                  <h4 class="mb-0">
                    <a>Daniela Sanchez</a>
                  </h4>
                  <span class="text-success">●</span>
                  <small>Online</small>
                </div>

              </div>
            </li>
            <li class="list-group-item px-0">
              <div class="row align-items-center">
                <div class="col-auto">
                  <!-- Avatar -->
                  <a href="#" class="avatar rounded-circle">
                    <img alt="Image placeholder" src="{{asset("plantilla/img/theme/team-4.jpg")}}">
                  </a>
                </div>
                <div class="col ml--2">
                  <h4 class="mb-0">
                    <a>Anyul Carol</a>
                  </h4>
                  <span class="text-success">●</span>
                  <small>Online</small>
                </div>

              </div>
            </li>
          </ul>
        </div>

      </div>
      <!-- Progress track -->
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <!-- Title -->
          <h5 class="h3 mb-0">Mis amigos</h5>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- List group -->
          <ul class="list-group list-group-flush list my--3">
            <li class="list-group-item px-0">
              <div class="row align-items-center">
                <div class="col-auto">
                  <!-- Avatar -->
                  <a href="#" class="avatar rounded-circle">
                    <img alt="Image placeholder" src="{{asset("plantilla/img/theme/team-4.jpg")}}">
                  </a>
                </div>
                <div class="col">
                  <h5>Alejandra Osorio</h5>
                  <div class="">
                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item px-0">
              <div class="row align-items-center">
                <div class="col-auto">
                  <!-- Avatar -->
                  <a href="#" class="avatar rounded-circle">
                    <img alt="Image placeholder" src="{{asset("plantilla/img/theme/angular.jpg")}}">
                  </a>
                </div>
                <div class="col">
                  <h5>Sebastian Rodriguez</h5>
                  <div class="">
                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item px-0">
              <div class="row align-items-center">
                <div class="col-auto">
                  <!-- Avatar -->
                  <a href="#" class="avatar rounded-circle">
                    <img alt="Image placeholder" src="{{asset("plantilla/img/theme/team-1.jpg")}} ">
                  </a>
                </div>
                <div class="col">
                  <h5>Brayan Oconer</h5>
                  <div class="">
                    <div class="progress-bar bg-red" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                  </div>
                </div>
              </div>
            </li> <br>
            <div class="card-header">
              <h5 class="h3 mb-0"> Mi grupos</h5>
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#" class="avatar rounded-circle">
                      <img alt="Image placeholder" src="{{asset("plantilla/img/theme/react.jpg")}}">
                    </a>
                  </div>
                  <div class="col">
                    <h5>Diseñadores</h5>
                    <div class="">
                      <div class="progress-bar bg-teal" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#" class="avatar rounded-circle">
                      <img alt="Image placeholder" src="{{asset("plantilla/img/theme/vue.jpg")}}">
                    </a>
                  </div>
                  <div class="col">
                    <h5>Java español</h5>
                    <div class="">
                      <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#" class="avatar rounded-circle">
                      <img alt="Image placeholder" src="{{asset("plantilla/img/theme/angular.jpg")}}">
                    </a>
                  </div>

                  <div class="col">
                    <h5>Desarrolladores </h5>
                    <div class="">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                  </div>
                </div>
              </li>
          </ul>
        </div>
      </div>
    </div>


    <div class="col-xl-8 order-xl-1" style="margin-top: 30px">
      <div class="nav-wrapper">
        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
          <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Amigos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Grupos</a>
          </li>
        </ul>
      </div>

      <div class="card shadow">
        <div class="card-body">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">

              <form role="form" method="POST" action="{{url('editarprofile',$user->id)}}">
                @csrf @method('PUT')
                <hr class="my-4" />
                @if (session('editarusu'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                  <span class="alert-text" data-toggle="notify" data-placement="top" data-align="center" data-type="danger" data-icon="ni ni-bell-55"><strong></strong>{{session('editarusu')}}</span>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @endif
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Informacion personal</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group ">

                        <h4>Nombre</h4>
                        <input class="form-control" value="{{ Auth::user()->name}}" name="name" type="text" style="width: 150px">


                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <h4>Genero</h4>
                        <input class="form-control" name="genero" value="{{ Auth::user()->genero}} " type="text" style="width: 150px">

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4" style="margin-top: -202px;margin-left: 190px">
                    <div class="tab-content">
                      <div id="datepicker-single-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="datepicker-single-component-tab">
                        <div class="form-group">
                          <h4>Fecha de nacimiento</h4>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                            </div>
                           
                            <input class="form-control datepicker" placeholder="Select date" name="cumpleanios" value='{{Auth::user()->cumpleanios}}' type="text"/>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                
                </div>
                <div class="row">
                  <div class="col-lg-4" style="margin-left: 230px">
                    <div class="form-group">
                      <h4>Gmail</h4>
                      <input class="form-control" name="email" value="{{ Auth::user()->email}}" type="text" style="width: 150px">

                    </div>
                    <button type="submit" style="width: 160px; margin-left:180px; margin-top: 10px" class="btn btn-primary" type="button">Editar Perfil</button>

                  </div>
                </div>
            </div>

            </form>
            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
              <h1 class="form-control-label">Amigos Sugeridos</h1><br>

              <a href="#" class="avatar ">
                <img alt="Image placeholder" src="{{asset("plantilla/img/theme/team-1.jpg")}} ">
              </a>
              <h4 style="
                            margin-left: 53px;
                            margin-top: -35px;
                        ">Juan Felix</h4>
              <br>
              <a href="#" class="avatar">
                <img alt="Image placeholder" src="{{asset("plantilla/img/theme/team-1.jpg")}} ">
              </a>
              <h4 style="
                         margin-left: 53px;
                         margin-top: -35px;
                     ">Manuela Beltran</h4> <br>

              <a href="#" class="avatar " style="
                         margin-left: 335px;
                         margin-top: -131px;
                     ">
                <img alt="Image placeholder" src="{{asset("plantilla/img/theme/team-2.jpg")}} ">
              </a>

              <h4 style="
                              margin-left: 390px;
                              margin-top: -120px;
                          ">
                <a>Natalia Rodriguez</a>
              </h4> <br>


              <a href="#" class="avatar" style="
                              margin-left: 335px;
                          ">
                <img alt="Image placeholder" src="{{asset("plantilla/img/theme/angular.jpg")}}">
              </a>

              <h4 style="
                                  margin-left: 390px;
                                  margin-top: -35px;
                              ">
                <a>Camilo Nuñez</a>
              </h4> <br>





            </div>
            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">


              <h1 class="form-control-label">Grupos sugeridos</h1><br>

              <a href="#" class="avatar rounded-circle">
                <img alt="Image placeholder" src="{{asset("plantilla/img/theme/react.jpg")}}">
              </a>
              <h4 style="
                            margin-left: 53px;
                            margin-top: -35px;
                        ">Java 5.8</h4>
              <br>
              <a href="#" class="avatar rounded-circle">
                <img alt="Image placeholder" src="{{asset("plantilla/img/theme/vue.jpg")}}">
              </a>
              <h4 style="
                         margin-left: 53px;
                         margin-top: -35px;
                     ">Diseñadores web</h4> <br>

              <a href="#" class="avatar " style="
                         margin-left: 335px;
                         margin-top: -131px;
                     ">

                <img alt="Image placeholder" src="{{asset("plantilla/img/theme/angular.jpg")}}">
              </a>


              <h4 style="
                              margin-left: 390px;
                              margin-top: -120px;
                          ">
                <a>Base de datos</a>
              </h4> <br>


              <a href="#" class="avatar" style="
                              margin-left: 335px;
                          ">
                <img alt="Image placeholder" src="{{asset("plantilla/img/theme/angular.jpg")}}">
              </a>

              <h4 style="
                                  margin-left: 390px;
                                  margin-top: -35px;
                              ">
                <a>Java</a>
              </h4> <br>

            </div>
          </div>
        </div>

      </div>
      <?php
      function calculaedad($fechanacimiento)
      {
        list($ano, $mes, $dia) = explode("-", $fechanacimiento);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
          $ano_diferencia--;
        return $ano_diferencia;
      } ?>
      <?php $user = auth()->user();
      ?>
    </div>
    </footer>
  </div>
</div>
<script src="{{asset("plantilla/vendor/jquery/dist/jquery.min.js")}}"></script>
<script src="{{asset("plantilla/vendor/js-cookie/js.cookie.js")}}"></script>
<script src="{{asset("plantilla/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")}}"></script>
<script src="{{asset("plantilla/vendor/date/bootstrap-datetimepicker.js")}}"></script>
<script src="{{asset("plantilla/js/argon.js?v=1.1.0")}}"></script>

@endsection