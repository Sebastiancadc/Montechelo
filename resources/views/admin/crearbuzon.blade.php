
@extends('admin.layout')
<link rel="icon" href="{{asset("plantilla/img/theme/isotipo.png")}}" type="image/png">
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
                    <form>
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Titulo</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>

                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlTextarea1">Descripcion</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlSelect1">Area</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Seleccione el area</option>
                                <option>Diseño</option>
                                <option>Software</option>
                                <option>Recursos Humanos</option>
                                <option>Administracion</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-5 text-right" style="float: right;">
                            <a href="AgregarBuzon.html" class="btn btn-sm btn-neutral">Enviar</a>
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
@endsection