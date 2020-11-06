@extends('admin.layout')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Noticia</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Noticia  </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ url('crearnoticia') }}" class="btn btn-sm btn-neutral">Agregar</a>
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

    <div class="row card-wrapper mb-2">
       @foreach ($noticias as $item)
      {{-- {{dd($item->user)}} --}}
          <div class="col-lg-4">
                    <img  src="{{ $item->image }}" class="card-img-top " width="200" height="220" ></img>
                    <div class="card position-relative">
                        <div class="card-body flex-column position-static">
                            <strong class="h4 d-inline-block mb-2 text-primary">{{ $item->category->name}}</strong>
                            <h5 class="h2 card-title mb-0">{{$item->title }}</h5>
                            
                            <small class="text-muted">{{ $item->created_at->format('d/m/Y') }} Escrito por <cite title="Source Title">{{$item->user->name}}</cite></small>
                            <p class="card-text mt-4">{{ substr($item->body, 0,20) }}...</p>
                            <a href="{{'post'}}/{{ $item->slug }}" class="btn btn-link px-0">Ver articulo</a>
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
@section('js')

<script>
    $(document).ready(function()
    {
       $("#modaLlenarcampos").modal("show");
    });
  </script> 
@endsection
@endsection