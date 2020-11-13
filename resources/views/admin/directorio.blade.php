@extends('admin.layout')
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

        <form >
          <div class="input-group gpr">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <button class="btn btn-primary" type="submit" style="height: 40px;">Todos</button>
                <span>.</span>
                <button class="btn btn-primary" type="submit" style="height: 40px;">Buscar</button>
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
          <img src="{{$usuario->photo_portada}}" class="img-fluid rounded" > 
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
              <a href="#" class="btn btn-sm btn-info mr-4">Añadir amigo</a>
              <a href="{{route('verperfil',$usuario->id)}}"  class="btn btn-sm btn-default float-right">Ver perfil</a>
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
              {{-- <small>Activo</small> --}}
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
            {{-- <div class="row">
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
            </div> --}}
          </div>
        </div>
      </div>
      @endforeach

{{-- Modal llenar campos --}}
@if (Auth::User()->phone == '')
<div class="col-lg-10">
  <div class="modal fade" id="modaLlenarcampos" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modal-dialog-centered modal-" role="document">
    <div class="modal-content ">       
        <div class="modal-header">
         <span aria-hidden="true"></span>
        </div>
        <div class="modal-body"> 
         <p>Por favor termine el registro para poder ingresar</p>                      
     </div>
        <div class="modal-footer">
           <a href="{{ url('perfil')}}" class="btn btn-white">¡Vamos!</a>
         </div>   
       </div>
</div>
</div>
</div>
@endif
{{-- fin modal llenar campos --}}
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

@section('jss')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 
<script>
  $('#search').autocomplete({
    source: function(request, response){
      $.ajax({
        url:"{{route('buscar')}}",
        dataType:'json',
        data:{
          term: request.term
        },
        success: function(data){
          response(data)
        }
      });  

    }
  });
  </script>
  <script>
    $(document).ready(function()
    {
       $("#modaLlenarcampos").modal("show");
    });
  </script> 
@endsection

@endsection