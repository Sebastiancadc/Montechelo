@extends('admin.layout')
<link rel="icon" href="{{asset("plantilla/img/theme/isotipo.png")}}" type="image/png">
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Editar repositorio</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Repositorio</a></li>
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
      <h3 class="mb-0">Editar repositorio</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
        <form action="{{url('admin/repositorio',$repositorioActualizar->Id_Repositorio)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control" placeholder="Tipo de archivo" value='{{$repositorioActualizar->tipo_archivo}}' name="tipo_archivo" type="text">
                </div>
              </div>
              <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control" placeholder="autor" value='{{$repositorioActualizar->autor}}' name="autor" type="text">
                </div>
              </div>

              <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control" placeholder="observaciones" value='{{$repositorioActualizar->observaciones}}' name="observaciones" type="text">
                </div>
              </div>

             

  <label for="imagen"><b>Archivo: </b></label><br>
  <input type="file" name="imagen" required>
  <input class="btn btn-primary my-4" type="submit" value="Enviar" style="margin-top: -20%;margin-left: 90px;" >
  
        <div class="text-center" style="margin-top: -25%;margin-left: 90px;" >
            <a href="{{ url('admin/repositorio') }}" class="btn btn-danger mt-4">Cancelar</a>
            @if (session('updaterepositorio'))
            <div class="alert alert-success mt-3">
            {{session('updaterepositorio')}} 
            </div>
         @endif
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
</div>

@endsection