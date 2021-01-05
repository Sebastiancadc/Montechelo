@extends('admin.layouts.layout')
@section('content')
<div class="header pb-6 d-flex align-items-center " <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8" style="width: 100%;height: 148%;"></span>
  <?php
  $user = auth()->user();
  ?>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">
      <div class="col-md-12 col-lg-7">
        <h1 class="display-2 text-white" style="font-size:35px;margin-top: 55px;">¡Hola! {{Auth::user()->name}} {{Auth::user()->lastname}}</h1>
      </div>
      <div style="text-align:right;visibility: hidden;">Este texto estar&aacute; alineado a la derecha.</div>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-4 order-xl-2">
      <div class="card card-profile">
        <form action="{{ url('fotoportada') }}" enctype='multipart/form-data' id="portadaForm">
          @csrf
          <input type="file" id="portadaInput" style="display: none" name="photo_portada">
        </form>
        <img src="{{Auth::user()->photo_portada}}" id="portadata" class="card-img img-fluid">
        <div id="hover"><h5 class="h3">Click para cambiar portada</h5></div>

        <div class="row justify-content-center">
          <div class="col-lg-3 order-lg-2">
            <div class="card-profile-image">
              <form action="{{ url('foto') }}" enctype='multipart/form-data' id="avatarForm">
                @csrf
                <input type="file" id="avatarInput" style="display: none" name="photo">
              </form>
              <img src="{{Auth::user()->photo}}" id="avatarImage" class="rounded-circle">
                <div id="hover2"><h5 class="h3" style="color: #fff;">Cambiar avatar</h5> </div>
              </div>
          </div>
        </div>
        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
          <div class="d-flex justify-content-between">
            {{-- <a href="#" class="btn btn-sm btn-info mr-4">Connect</a> --}}
            <a href="{{ url('Chatmontechelo')}}" class="btn btn-sm btn-default float-right">Mensaje</a>
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
              {{ Auth::user()->name}} {{Auth::user()->lastname}} <span class="font-weight-light"> {{App\Helpers\Helpers::edad(Auth::user()->cumpleanios)}}</span>
              años
              <div class="h5 mt-4">
                {{ Auth::user()->area}}
              </div>
            </h5>
            <div class="">
              {{ Auth::user()->email}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-8 order-xl-1" style="margin-top: 30px">
      <div class="nav-wrapper">
        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
          <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-circle-08 mr-2"></i>Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-satisfied mr-2"></i>Mi Biografía</a>
          </li>
        </ul>
      </div>
      <div class="card shadow">
        <div class="card-body">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
              <form role="form" method="POST" action="{{url('editarprofile',$user->id)}}">
                @csrf @method('PUT')
                <h4 class="text-muted ">INFORMACIÓN PERSONAL</h4>
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
                <a class="text-muted mb-4">Seleccione los campos que desee ocultar</a>
                <br><br>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-6">
                      <h4>Nombre</h4>
                      <input class="form-control" value="{{ Auth::user()->name}}" name="name" type="text">
                    </div>
                    <div class="col-md-6">
                      <h4>Apellido</h4>
                      <input class="form-control" value="{{ Auth::user()->lastname}}" name="lastname" type="text">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-12">
                      <h4>Correo</h4>
                      <input class="form-control" name="email" value="{{ Auth::user()->email}}" type="text">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="tab-content">
                        <div id="datepicker-single-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="datepicker-single-component-tab">
                          <div class="form-group">
                            <label class="form-control-label" for="example3cols2Input">Fecha de nacimiento</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                              </div>
                              <input class="form-control datepicker" id="date" type="text" name="cumpleanios" value='{{App\Helpers\Helpers::formatearFechaPerfil(Auth::user()->cumpleanios)}}'>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h4>Área </h4>
                      <select class="form-control" id="exampleFormControlSelect1" name="area" required>
                        <option>{{Auth::user()->area}}</option>
                        <option>Programacion</option>
                        <option>Diseño</option>
                        <option>Marketing</option>
                        <option>Produccion</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <h4>Genero</h4>
                      <select class="form-control" id="exampleFormControlSelect1" name="genero" required>
                        <option>{{ Auth::user()->genero}}</option>
                        <option>Hombre</option>
                        <option>Mujer</option>
                        <option>Otro</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <h4>Teléfono <input type="checkbox" name="phone_status" @if (Auth::user()->phone_status == '1')
                        checked value="1"
                        @else
                        value="0"
                        @endif></h4>
                      <input class="form-control" name="phone" value="{{Auth::user()->phone}}" type="text" min="10" max="10" required pattern="[0-9]{10}" maxlength="10">
                    </div>
                  </div>
                </div>
                <div class="card-body text-center">
                  <button type="submit" style="margin-left: 56%;" class="btn btn-primary" type="button">Guardar</button>
                </div>
            </div>
            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
              <h1 class="form-control-label">Biografía  </h1><br>
              <textarea name="biografia" id="" cols="75" rows="5">{{Auth::user()->biografia}}</textarea>
              <div class="card-body text-center">
                <button type="submit" style="margin-left: 86%;" class="btn btn-primary" type="button">Guardar</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
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
<script type="text/javascript">
  $(function() {
    $('#date').date({
      format: 'Y/m/d',
    });
  });
</script>
@section('js')
<script src="{{asset("js/fotoperfil.js")}}"></script>
@endsection
@endsection