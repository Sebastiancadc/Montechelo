@extends('admin.layout')
@section('content')

<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <h6 class="h2 text-white d-inline-block mb-0">Novedades</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                              
                                <li class="breadcrumb-item active" aria-current="page">Novedades</li>
                            </ol>
                        </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
      <h3 class="mb-0">Novedad</h3>
    </div>

    <form role="form" method="POST" action="{{ url('crearnovedades')}}" >
      @csrf @method('POST') 
    <!-- Card body -->
    <div class="card-body">
      <!-- Form groups used in grid -->
      <div class="row">
        <div class="col-md-4">
            <label class="form-control-label" for="exampleFormControlSelect1">Area</label>
            <select class="form-control" id="exampleFormControlSelect1" name="area">
              <option>Desarrollo</option>
              <option>Talento humano</option>
              <option>Recursos humanos</option>
              <option>Produccion</option>
              
            </select>
          </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="form-control-label" for="example3cols2Input">Fecha</label>
            <input type="date" class="form-control" id="example3cols2Input" name="fecha">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="form-control-label" for="example3cols3Input">Novedad</label>
            <input type="text" class="form-control" id="example3cols3Input" name="novedad" placeholder="Novedad">
          </div>
        </div>
      </div>
      
      <div class="row">

        <div class="col-md-9">
            <label class="form-control-label" for="exampleFormControlTextarea1">descripcion</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" rows="3"></textarea>
          </div>
      </div>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary my-4">Crear</button>
      <button class="btn btn-danger ml-auto" data-dismiss="modal">Cancelar</button>
    </div>
  </form>
  @if (session('crearnovedad'))
  <div class="alert alert-success mt-3">
  {{session('crearnovedad')}} 
  </div>
@endif
  </div>
</div>
  @endsection