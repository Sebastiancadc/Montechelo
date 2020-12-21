@extends('admin.layouts.layout')
@section('content')
<link rel="stylesheet" href="{{asset("plantilla/css/jquery-ui.min.css")}}">
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Directorio</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page">Directorio</li>
            </ol>
          </nav>
        </div>
      </div>
      <form>
        <div class="input-group gpr">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <button class="btn btn-primary hjk" type="submit">Todos</button>
              <span>.</span>
              <button class="btn btn-primary hjk" type="submit">Buscar</button>
              <span>.</span>
            </div>
            <input class="form-control" type="search" placeholder="Buscar por" name="search" id="search" style="height: 40px;">
          </div>
        </div>
      </form>
      <!-- Card stats -->
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row card-wrapper">
    @foreach ($usuarios as $usuario)
    <div class="col-lg-4">
      <!-- Profile card -->
      <div class="card card-profile">
        <img src="{{$usuario->photo_portada}}" class="img-fluid rounded">
        <div class="row justify-content-center">
          <div class="col-lg-3 order-lg-2">
            <div class="card-profile-image">
              <a href="{{route('verperfil',$usuario->id)}}">
                <img src="{{$usuario->photo}}" class="rounded-circle">
              </a>
            </div>
          </div>
        </div>
        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
          <div class="d-flex justify-content-between">
            {{-- <a href="#" class="btn btn-sm btn-info mr-4">Añadir amigo</a> --}}
            <a href="{{route('verperfil',$usuario->id)}}" class="btn btn-sm btn-default float-right">Ver perfil</a>
          </div>
        </div>
        <div class="card-body pt-0">
          <div class="text-center">
            @if(Illuminate\Support\Facades\Cache::has('user-is-online-'.$usuario->id))
            <span class="text-success">●</span>
            <small>Conectado</small>
            @else
            <span class="text-danger">●</span>
            <small>Desconectado</small>
            @endif
            <h5 class="h3">
              {{$usuario->name}} {{$usuario->lastname}}<span class="font-weight-light">,
                {{App\Helpers\Helpers::edad($usuario->cumpleanios)}}
            </h5>
            @if ($usuario->phone_status == '1')
            <div class="h5 font-weight-300">
              <i class="ni location_pin mr-2"></i>{{$usuario->phone}}
            </div>
            @endif
            <div class="h5 font-weight-300">
              <i class="ni location_pin mr-2"></i>{{$usuario->area}}
            </div>
            <div>
              <a class="h3">{{$usuario->email}}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    @include('admin.modales.modalCampos')
    {{-- @include('admin.modales.modalPausas') --}}
  </div>
  @include('admin.layouts.footer')
</div>
</div>
@section('jss')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
  $('#search').autocomplete({
    source: function(request, response) {
      $.ajax({
        url: "{{route('buscar')}}",
        dataType: 'json',
        data: {
          term: request.term
        },
        success: function(data) {
          response(data)
        }
      });
    }
  });
</script>
<script src="https://cdn.rawgit.com/jackmoore/colorbox/master/jquery.colorbox-min.js"></script>
<script src="{{asset("pausasacitvas/pausas.js")}}"></script>
@endsection
@endsection