@extends('admin.layout')
@section('content')

<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <h6 class="h2 text-white d-inline-block mb-0">Solicitud Online</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>

                                <li class="breadcrumb-item active" aria-current="page">Solicitud Online</li>
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
      <h3 class="mb-0">Enviar solicitud</h3>
    </div>

    <form role="form" method="POST" action="{{ url('crearsolicitudes')}}" >
      @csrf @method('POST')
    <!-- Card body -->
    <div class="card-body">
      <!-- Form groups used in grid -->
      <div class="row">
            <div class="col-md-4 mb-3">
                <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">Nombre</label>
                <input type="text" class="form-control" id="example3cols3Input" name="Nombre" placeholder="">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">Apellido</label>
                <input type="text" class="form-control" id="example3cols3Input" name="Apellido" placeholder="">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-control-label" for="exampleFormControlSelect1">Tipo de solicitud</label>
                <select class="form-control" id="exampleFormControlSelect1" name="Tipo_de_solicitud">
                    <option>Vacaciones</option>
                    <option>Desprendibles de pago</option>
                    <option>Certificado laboral</option>
                    <option>Certificado de nómina</option>
                </select>
            </div>
      </div>
      <div class="row">
            <div class="col-md-4 mb-3">
                <div class="form-group">
                    <label class="form-control-label" for="example3cols3Input">Número de documento</label>
                    <input type="text" class="form-control" id="example3cols3Input" name="Cedula" placeholder="One of three cols">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="form-group">
                    <label class="form-control-label" for="example3cols3Input">Teléfono</label>
                    <input type="text" class="form-control" id="example3cols3Input" name="Telefono" placeholder="One of three cols">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-control-label" for="exampleFormControlSelect1">Área de trabajo</label>
                <select class="form-control" id="exampleFormControlSelect1" name="Area_de_trabajo">
                    <option>Desarrollo</option>
                    <option>Talento Humano</option>
                    <option>Recursos Humanos</option>
                    <option>Producción</option>
                </select>
            </div>
      </div>
      <div class="row">
            <div class="col-md-4 mb-3">
                <div class="form-group">
                    <label class="form-control-label" for="example3cols2Input">Fecha</label>
                    <input type="date" class="form-control" id="example3cols2Input" name="Fecha">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox mb-3">
                <input class="custom-control-input" id="invalidCheck2" type="checkbox" value="" required>
                <label class="custom-control-label" for="invalidCheck2">Acepto los términos y condiciones.</label>
                <div class="invalid-feedback">
                    Debes aceptar los términos y condiciones antes de enviar.
                </div>
           </div>
         </div>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary my-4">Crear</button>
      <button class="btn btn-danger ml-auto" data-dismiss="modal">Cancelar</button>
    </div>
  </form>
  @if (session('crearsolicitud'))
  <div class="alert alert-success mt-3">
  {{session('crearsolicitud')}}
  </div>
@endif
  </div>
</div>
  @endsection
