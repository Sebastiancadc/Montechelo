@extends('admin.layouts.layout')
@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Editar eventos</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Calendario</a></li>
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
          <link rel="stylesheet" href="{{asset("plantilla/css/date.css")}}" type="text/css">
          <div class="card-header">
            <h3 class="mb-0">Editar evento</h3>
          </div>
          @if (session('editarevento'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>{{session('editarevento')}}</strong></span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          <!-- Card body -->
          <div class="card-body">
            <form action="{{url('Calendario/editarEvento',$eventos->id)}}" method="POST">
              @method('PUT')
              @csrf
              <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control" placeholder="titulo" value='{{$eventos->name}}' name="name" type="text">
                  <input value='{{$eventos->Usuario_id_Usuario}}' name="Usuario_id_Usuario" type="text" hidden>
                </div>
                @if ($errors->has('name'))
                <strong class="text-danger tamano">{{ $errors->first('name') }}</strong>
                @endif
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <h3>Fecha inicial</h3>
                    <div class='input-group' id='datetimepicker1'>
                      <input type='text' class="form-control" name="start_time" value='{{$eventos->start_time}}'>
                      <span class="input-group-addon input-group-append">
                        <button class="btn btn-outline-primary" type="button" id="button-addon2"> <span class="fa fa-calendar"></span></button>
                      </span>
                    </div>
                    @if ($errors->has('start_time'))
                    <strong class="text-danger tamano">{{ $errors->first('start_time') }}</strong>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <h3>Fecha final</h3>
                    <div class='input-group date' id='datetimepicker12'>
                      <input type='text' class="form-control" name="end_time" value='{{$eventos->end_time}}'>
                      <span class="input-group-addon input-group-append">
                        <button class="btn btn-outline-primary" type="button" id="button-addon2"> <span class="fa fa-calendar"></span></button>
                      </span>
                    </div>
                    @if ($errors->has('end_time'))
                    <strong class="text-danger tamano">{{ $errors->first('end_time') }}</strong>
                    @endif
                  </div>
                </div>
              </div>
              <div class="form-group mb-3">
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1" name="className" id="class">
                    <option>{{$eventos->className}}</option>
                    <option class="importantes" value="Importante">Importante</option>
                    <option class="especials" value="Especial">Especial</option>
                    <option class="advertencias" value="Advertencia">Advertencia</option>
                  </select>
                </div>
                @if ($errors->has('className'))
                <strong class="text-danger tamano">{{ $errors->first('className') }}</strong>
                @endif
              </div>
              <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative">
                  <textarea name="description" id="description" cols="60" rows="05">{{$eventos->description}}</textarea>
                </div>
                @if ($errors->has('description'))
                <strong class="text-danger tamano">{{ $errors->first('description') }}</strong>
                @endif
              </div>
              <button type="submit" class="btn btn-primary my-4" style="margin-left: 19%;">Editar</button>
              <a href="{{url("calendar")}}" class="btn btn-secondary my-4">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{asset("plantilla/vendor/jquery/dist/jquery.min.js")}}"></script>
<script src="{{asset("plantilla/vendor/moment/min/moment.min.js")}}"></script>
<script type="text/javascript">
  $(function() {
    $('#datetimepicker1').datetimepicker({
      format: 'Y/M/D hh:mm',
      icons: {
        time: "fa fa-clock",
        date: "fa fa-calendar-day",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
      }
    });
  });
</script>
<script>
  $(function() {
    $('#datetimepicker12').datetimepicker({
      format: 'Y/M/D hh:mm',
      icons: {
        time: "fa fa-clock",
        date: "fa fa-calendar-day",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
      }
    });
  });
</script>
@endsection