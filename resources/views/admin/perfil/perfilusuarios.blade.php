@extends('admin.layouts.layout')
@section('content')
<div class="header pb-6 d-flex align-items-center " <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8" style="width: 100%;
height: 148%;"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">
      <div class="col-md-12 col-lg-7">
        <h1 class="display-2 text-white" style="font-size:35px;margin-top: 55px;">{{$perfil->name}} {{$perfil->lastname}} </h1>
      </div>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-4 order-xl-2">
      <div class="card card-profile">
        <a href="#" data-toggle="modal" data-target="#verfotoportada{{$perfil->id}}">
          <img src="{{$perfil->photo_portada}}" class="card-img-top">
        </a>
        <div class="row justify-content-center">
          <div class="col-lg-3 order-lg-2">
            <div class="card-profile-image">
              <a href="#" data-toggle="modal" data-target="#verfotoperfil{{$perfil->id}}">
                <img src="{{$perfil->photo}}" class="rounded-circle">
              </a>
            </div>
          </div>
        </div>
        <div class="modal fade" id="verfotoperfil{{$perfil->id}}" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="width: 346px;">
              <div class="modal-body">
                <img src="{{$perfil->photo}}" height="300" width="300" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="verfotoportada{{$perfil->id}}" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img src="{{$perfil->photo_portada}}" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
          <div class="d-flex justify-content-between">
            <a href="#" class="btn btn-sm btn-default float-right">Mensaje</a>
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
              {{$perfil->name}} {{$perfil->lastname}} <span class="font-weight-light"><br> {{App\Helpers\Helpers::edad($perfil->cumpleanios)}}</span>
              años
            </h5>
            <div class="h5 font-weight-300">
              <i class="ni location_pin mr-2"></i>{{$perfil->area}}
            </div>
            <div class="h5 mt-4">
              {{$perfil->email}}
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
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-satisfied mr-2"></i>Biografia</a>
          </li>
        </ul>
      </div>
      <div class="card shadow">
        <div class="card-body">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
              <hr class="my-4" />
              <!-- Address -->
              <h6 class="heading-small text-muted mb-4">Informacion personal</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-md-6">
                    <h4>Nombre</h4>
                    <h4 class=" text-muted mb-4">{{$perfil->name}} {{$perfil->lastname}}</h4>
                  </div>
                  <div class="col-md-5">
                    <div class="tab-content">
                      <h4>Fecha de nacimiento</h4>
                      <h4 class=" text-muted mb-4">{{$perfil->cumpleanios}}</h4>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <h4>Gmail</h4>
                    <h4 class=" text-muted mb-4">{{$perfil->email}}</h4>
                  </div>
                  <div class="col-md-5">
                    <h4>Genero</h4>
                    <h4 class=" text-muted mb-4">{{$perfil->genero}}</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <h4>Area</h4>
                    <h4 class=" text-muted mb-4">{{$perfil->area}}</h4>
                  </div>
                  @if ($perfil->phone_status == '1')
                  <div class="col-md-5">
                    <h4>Telefono</h4>
                    <h4 class=" text-muted mb-4">{{$perfil->phone}}</h4>
                  </div>
                  @endif
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
              <h1 class="form-control-label">Biografia</h1><br>
              <textarea name="biografia" id="" cols="75" rows="5" disabled>{{$perfil->biografia}}</textarea>
            </div>
          </div>
        </div>
      </div>
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