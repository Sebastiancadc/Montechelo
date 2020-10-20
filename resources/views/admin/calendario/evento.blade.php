@extends('admin.layout')
<link rel="icon" href="{{asset("plantilla/img/theme/isotipo.png")}}" type="image/png">
@section('content')

<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Editar evento</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Calendario</a></li>
              <li class="breadcrumb-item active" aria-current="page">Editar </li>
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
    <h3 class="mb-0">Editar evento</h3>
  </div>
  <!-- Card body -->
  <div class="card-body">
      <form action="{{url('admin/evento',$event->id)}}" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group mb-3">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                </div>
                <input class="form-control" placeholder="titulo" value='{{$event->titulo}}' name="titulo" type="text">
              </div>
            </div>
            <div class="form-group mb-3">
              <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
              
                  <input class="form-control datepicker" value='{{$event->fecha}}' type="date" name="fecha" id="fecha">
                </div>
              </div>
            </div>
            <div class="form-group mb-3">
              <div class="form-group">
                <select class="form-control" id="class" name="class">
                  <option>{{$event->class}}</option>
                  <option>Admin</option>
                  <option>Colaborador</option>
                </select>
              </div>
          </div>
            <div class="form-group mb-3">
              <div class="input-group input-group-merge input-group-alternative">
                <textarea name="descripcion" id="descripcion" cols="60" rows="05">{{$event->descripcion}}</textarea>
              </div>
            </div>
      <button type="submit" class="btn btn-primary my-4" style="margin-left: 19%;">Editar</button>
      

      <a href="#!" data-toggle="modal" data-target="#deleteNovedad{{$event->id}}" class="btn btn-danger my-4">Eliminar</a>
      <a href="{{url("Evento/index")}}" class="btn btn-link my-4">Cancelar</a>
    </form>

    <div class="modal fade" id="deleteNovedad{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary border-0 mb-0">

              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <h3>¿Esta seguro de eiminar el evento?</h3>
                </div>
                <form role="form" method="POST" action="{{route('eliminarevento',$event->id)}}" >
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

    @if (session('updatess'))
    <div class="alert alert-success mt-3">
    {{session('updatess')}} 
    </div>
 @endif
  </div>
</div>
</div>
</div>
</div>
</div>
@endsection