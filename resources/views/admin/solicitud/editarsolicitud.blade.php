@extends('admin.layout')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Editar solicitud</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Solicitud</a></li>
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
      <h3 class="mb-0">Editar el estado de la solicitud</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
        <form action="{{url('admin/solicitud',$solicitudActualizar->Id_Solicitud)}}" method="POST">
            @method('PUT')
            @csrf
        <select class="form-control" data-toggle="select" name="estado_solicitud" id="estado_solicitud">
          <option>{{$solicitudActualizar->estado_solicitud}}</option>
          <option>Pendiente</option>
          <option>Revisado</option>
        </select>
        <button type="submit" class="btn btn-primary my-4">Editar</button>
      </form>
      @if (session('update'))
        <div class="alert alert-success mt-3">
        {{session('update')}}
        </div>
     @endif
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection
