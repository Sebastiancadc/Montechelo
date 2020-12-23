@extends('admin.layouts.layout')
@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Ver evento</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Eventos</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ver</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row card-wrapper">
    <div class="col-lg-3">
      <!-- Basic with list group -->
      <div class="col-md-15">
        <div class="card card-stats">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0">Tipo de evento</h5>
              </div>
            </div>
            <br>
            <div class="col-auto" style="width: -webkit-fill-available;">
              <div class="icon-shape rounded-circle" style="background-color: #2dce89;padding: 8px;"></div>
              <span>
                <h4 style="margin-left: 25px;margin-top: -26px;">Especial</h4>
              </span>
            </div>
            <div class="col-auto" style="width: -webkit-fill-available;">
              <div class="icon-shape rounded-circle" style="background-color: #fb6340;padding: 8px;">
              </div><span>
                <h4 style="margin-left: 25px;margin-top: -25px;">Advertencia</h4>
              </span>
            </div>
            <div class="col-auto" style="width: -webkit-fill-available;">
              <div class="icon-shape rounded-circle" style="background-color: #11cdef;padding: 8px;"></div>
              <span>
                <h4 style="margin-left: 25px;margin-top: -25px;">Importante</h4>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-7">
      <!-- Basic with card header -->
      <div class="card">
        <!-- Card image -->
        <img class="card-img-top {{$eventos->className}}" style="height: 116px;">
        <!-- List group -->
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <h3 class="card-title mb-3">Titulo</h3> {{$eventos->name}}
          </li>
          <li class="list-group-item">
            <h3 class="card-title mb-3">Fecha inical</h3> {{$eventos->start_time}}
          </li>
          <li class="list-group-item">
            <h3 class="card-title mb-3">Fecha final</h3> {{$eventos->end_time}}
          </li>
        </ul>
        <!-- Card body -->
        <li class="list-group-item">
          <h3 class="card-title mb-3">Descripcion</h3> {{$eventos->description}}
        </li>
        <div class="card-body text-center">
          @if($eventos->Usuario_id_Usuario == Auth::User()->id)
          <a href="{{route('verEvento',$eventos->id)}}" class="btn btn-primary">Editar</a>
          <a href="#!" data-toggle="modal" data-target="#deleteNovedad{{$eventos->id}}" class="btn btn-danger my-4">Eliminar</a>
          @endif
          <a href="{{url("calendar")}}" class="btn btn-secondary">Volver</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="deleteNovedad{{$eventos->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="card bg-secondary border-0 mb-0">
          <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
              <h3>¿Esta seguro de eiminar el evento?</h3>
            </div>
            <form role="form" method="POST" action="{{route('eliminarEventos',$eventos->id)}}">
              @csrf @method('DELETE')
              <div class="text-center">
                <button type="submit" class="btn btn-primary my-4">Eliminar</button>
                <button class="btn btn-danger ml-auto" data-dismiss="modal">Cancelar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection