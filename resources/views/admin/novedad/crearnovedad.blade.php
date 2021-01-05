@extends('admin.layouts.layout')
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
    @if (session('crearnovedad'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <span class="alert-icon"><i class="ni ni-like-2"></i></span>
      <span class="alert-text" data-toggle="notify" data-placement="top" data-align="center" data-type="success" data-icon="ni ni-bell-55"><strong></strong>{{session('crearnovedad')}}</span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <form role="form" method="POST" action="{{ url('crearnovedades')}}">
      @csrf @method('POST')
      <!-- Card body -->
      <div class="card-body">
        <!-- Form groups used in grid -->
        <div class="row">
          <div class="col-md-4">
            <label class="form-control-label" for="exampleFormControlSelect1">Área </label>
            <select class="form-control" id="exampleFormControlSelect1" name="area" >
              <option></option>
              <option>Desarrollo</option>
              <option>Talento humano</option>
              <option>Recursos humanos</option>
              <option>Produccion</option>
            </select>
            @if ($errors->has('area'))
            <strong class="text-danger tamano">{{ $errors->first('area') }}</strong>
            @endif
          </div>
          <div class="col-md-4">
            <div class="tab-content">
              <div id="datepicker-single-component" class="tab-pane tab-example-result fade show active" role="tabpanel" aria-labelledby="datepicker-single-component-tab">
                <div class="form-group">
                  <label class="form-control-label" for="example3cols2Input">Fecha</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input class="form-control datepicker" placeholder="Select date" name="fecha" type="text"  />      
                  </div>
                  @if ($errors->has('fecha'))
                  <strong class="text-danger tamano">{{ $errors->first('fecha') }}</strong>
                  @endif
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-control-label" for="example3cols3Input">Novedad</label>
              <input type="text" class="form-control" id="example3cols3Input" name="novedad" placeholder="novedad" maxlength="30">
              @if ($errors->has('novedad'))
              <strong class="text-danger tamano">{{ $errors->first('novedad') }}</strong>
              @endif
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-9">
            <label class="form-control-label" for="exampleFormControlTextarea1">Descripción</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" rows="3" placeholder="descripcion" maxlength="250"></textarea>
          </div>
        </div>
        @if ($errors->has('descripcion'))
        <strong class="text-danger tamano">{{ $errors->first('descripcion') }}</strong>
        @endif
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary my-4">Crear</button>
      </div>
    </form>
  </div>
  @include('admin.layouts.footer')
</div>
@include('admin.modales.modalCampos')
{{-- @include('admin.modales.modalPausas') --}}
@section('js')
<script src="{{asset("pausasacitvas/pausas.js")}}"></script>
@endsection
<script src="{{asset("plantilla/vendor/jquery/dist/jquery.min.js")}}"></script>
<script src="{{asset("plantilla/vendor/js-cookie/js.cookie.js")}}"></script>
<script src="{{asset("plantilla/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")}}"></script>
<script src="{{asset("plantilla/vendor/date/bootstrap-datetimepicker.js")}}"></script>
<script src="{{asset("plantilla/js/argon.js?v=1.1.0")}}"></script>
@endsection
