
@extends('admin.layout')
@section('content')
<!-- AGREGAR BUZON DE SUGERENCIAS -->
<div class="header bg-primary pb-6" style="height: 100px;">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Buzon de sugerencias</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Agregar sugerencia</li>
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                </ol>
              </nav>
            </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>

<div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class="col-lg-8 card-wrapper">
            <!-- Grid system -->
            <div class="card">
                <div class="card-body">
                    <form  method="POST" action="{{ url('crearsugerencias')}}">
                      @csrf @method('POST')
                      <div class="form-group">
                        @if (session('buzon_crear'))
                        <div class="alert alert-success mt-3">
                            {{session('buzon_crear')}}
                        </div>
                        @endif
                            <label class="form-control-label" for="exampleFormControlInput1" name="tipo_sugerencia">Titulo</label>
                            <select class="form-control" id="tipo_sugerencia" name="tipo_sugerencia">


                                <option>Seleccionar tipo de sugerencia </option>
                                <option>Quejas</option>
                                <option>Reclamos</option>
                                <option>Observacion</option>
                                <option>Novedad</option>
                                <option>Mejoras</option>
                                <option>Felicidades</option>
                            </select>
                        </div>
                        @error('titulo')
                        <div class="alert alert-danger">titulo requerido</div>
                        @enderror

                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlTextarea1">Descripcion</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                        </div>
                        @error('descripcion')
                        <div class="alert alert-danger">descripcion requerida</div>
                        @enderror
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlSelect1" name="area" required>Area</label>
                            <select class="form-control" id="area" name="area">
                                <option>Seleccione el area</option>
                                <option>Diseño</option>
                                <option>Software</option>
                                <option>Recursos Humanos</option>
                                <option>Administracion</option>
                            </select>
                        </div>
                        @error('area')
                        <div class="alert alert-danger">area requerida</div>
                        @enderror
                        <div class="col-lg-6 col-5 text-right" style="float: right;">
                            <button type="submit" class="btn btn-primary my-4">Enviar</button>
                        </div>
                    </form>

            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
