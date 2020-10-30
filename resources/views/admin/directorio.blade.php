@extends('admin.layout')
@section('content')
  
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
          <img src="{{asset("plantilla/img/theme/img-1-1000x600.jpg")}}" alt="Image placeholder" class="card-img-top">
          <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
              <div class="card-profile-image">
                <a href="#">
                  <img src="{{asset("plantilla/img/theme/team-6.jpg")}}" class="rounded-circle">
                </a>
              </div>
            </div>
          </div>
          <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
            <div class="d-flex justify-content-between">
              <a href="#" class="btn btn-sm btn-info mr-4">Añadir amigo</a>
              <a href="{{route('verperfil',$usuario->id_Usuario)}}"  class="btn btn-sm btn-default float-right">Ver perfil</a>
            </div>
          </div>
         
          <div class="card-body pt-0">
            <div class="text-center">
              <span class="text-success">●</span>
              <small>Activo</small>
              <h5 class="h3">
                {{$usuario->name}}<span class="font-weight-light">, 
                {{App\Helpers\Helpers::edad($usuario->cumpleanios)}}
              </h5>
              <div class="h5 font-weight-300">
                <i class="ni location_pin mr-2"></i>{{$usuario->area}}
              </div>
              <div>
                <a class="h3>">{{$usuario->email}}</a>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="card-profile-stats d-flex justify-content-center">
                  <div class="mt-3">
                    <a href="#" class="btn btn-twitter btn-icon-only rounded-circle">
                    
                    </a>
                    <a href="#" class="btn btn-facebook btn-icon-only rounded-circle">
                     
                    </a>
                    <a href="#" class="btn btn-dribbble btn-icon-only rounded-circle">
                     
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <!-- Footer -->
    <footer class="footer pt-0">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6">
          <div class="copyright text-center text-lg-left text-muted">
            &copy; 2020 <a href="" class="font-weight-bold ml-1" target="">Grupo 3.</a>
          </div>
        </div>

      </div>
    </footer>
  </div>
</div>  
@endsection