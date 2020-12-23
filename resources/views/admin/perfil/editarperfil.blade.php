@extends('admin.layouts.layout')
<link rel="icon" href="{{asset("plantilla/img/theme/isotipo.png")}}" type="image/png">
@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Editar perfil</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Perfil</a></li>
              <li class="breadcrumb-item active" aria-current="page">Editar</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card-wrapper">
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <h3 class="mb-0">Editar el perfil</h3>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <form action="{{url('admin/usuario',$userActualizar->id)}}" method="POST">
              @method('PUT')
              @csrf
              <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control" placeholder="Nombre" value='{{$userActualizar->name}}' name="name" type="text">
                </div>
              </div>
              <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input class="form-control" placeholder="Email" value='{{$userActualizar->email}}' name="email" type="email">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                      <input type="datetime-local">
                      <input class="form-control datepicker" value='{{$userActualizar->cumpleaños}}' type="date" name="cumpleaños" id="cumpleaños">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1" name="genero">
                      <option>{{$userActualizar->genero}}</option>
                      <option>Hombre</option>
                      <option>Mujer</option>
                      <option>Otro</option>
                    </select>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary my-4" style="margin-left: 19%;">Editar</button>
              <div class="text-center" style="margin-top: -20%;margin-left: 45%;">
                <a href="{{ url('admin/perfil') }}" class="btn btn-danger mt-4">Cancelar</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script></script>
</div>
@endsection