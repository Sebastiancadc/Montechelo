@extends('admin.layouts.layout')
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

    @if (session('crearsolicitudes'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <span class="alert-icon"><i class="ni ni-like-2"></i></span>
      <span class="alert-text" data-toggle="notify" data-placement="top" data-align="center" data-type="danger" data-icon="ni ni-bell-55" ><strong></strong>{{session('crearsolicitudes')}}</span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  @endif
    <form role="form" method="POST" action="{{ url('crearsolicitudes')}}" >
      @csrf @method('POST')
    <!-- Card body -->
    <div class="card-body">
      <!-- Form groups used in grid -->
      <div class="row">
            <div class="col-md-4 mb-3">
                <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">Nombre</label>
                <input type="text" class="form-control"  name="nombre"  required pattern="[A-Za-z]{5}" minlength="5" maxlength="30">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="form-group">
                <label class="form-control-label" for="example3cols3Input">Apellido</label>
                <input type="text" class="form-control" name="apellido" required pattern="[A-Za-záéíóúÁÉÍÓÚñÑ]{5}" minlength="5" maxlength="30">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-control-label" for="exampleFormControlSelect1">Tipo de solicitud</label>
                <select class="form-control" name="tipo_solicitud" required>
                    <option>Vacaciones</option>
                    <option>Permisos</option>

                </select>
            </div>
      </div>
      <div class="row">
            <div class="col-md-4 mb-3">
                <div class="form-group">
                    <label class="form-control-label" for="example3cols3Input">Número de documento</label>
                    <input type="text" class="form-control"  name="cedula" placeholder="" required pattern="[0-9-]{1,10}" maxlength="10">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="form-group">
                    <label class="form-control-label" for="example3cols3Input">Teléfono</label>
                    <input type="text" class="form-control"  name="telefono" placeholder="" required pattern="[0-9-]{1,10}" maxlength="10">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-control-label" for="exampleFormControlSelect1">Área de trabajo</label>
                <select id="basic" name="area_trabajo" class="col-md-15">
                    <option>Seleccione algun campo</option>
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
                    <input type="date" class="form-control" name="fecha" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox mb-3">
                <input class="custom-control-input" type="checkbox" >
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
  @include('admin.modales.modalCampos')
  {{-- @include('admin.modales.modalPausas') --}}
  </div>
  <!-- Footer -->
  @include('admin.layouts.footer')
</div>
@section('js')
<script src="{{asset("pausasacitvas/pausas.js")}}">
$('#basic').select2({
    theme: "bootstrap"
});
</script>
@endsection
  @endsection
