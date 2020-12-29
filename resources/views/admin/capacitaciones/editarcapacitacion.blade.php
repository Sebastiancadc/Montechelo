@extends('admin.layouts.layoutAdmin')
@section('contents')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Administrador</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Capacitaciones</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Editar</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 ml-auto mr-auto">
                <div class="card">
                    <form action="{{url('admin/capacitaciones',$capacitacionActualizar->id_capacitacion)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <h3 class="card-header">Editar capacitacion</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>Titulo</h4>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-align-center"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" placeholder="Titulo" value='{{$capacitacionActualizar->titulo}}' name="titulo" type="text" >                                              
                                                </div>
                                                @if ($errors->has('titulo'))
                                                <strong class="text-danger tamano">{{ $errors->first('titulo') }}</strong>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <h4>Fecha</h4>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" name="fecha" value='{{$capacitacionActualizar->fecha}}' type="date" >
                                                </div>
                                                @if ($errors->has('fecha'))
                                                <strong class="text-danger tamano">{{ $errors->first('fecha') }}</strong>
                                                @endif
                                            </div>
                                            <div class="col-md-12">
                                                <br>
                                                <h4>Descripcion</h4>
                                                <div class="input-group">
                                                    <textarea class="form-control" name="descripcion" type="text" cols="100" rows="5" >{{$capacitacionActualizar->descripcion}}</textarea>
                                                </div>
                                                @if ($errors->has('descripcion'))
                                                <strong class="text-danger tamano">{{ $errors->first('descripcion') }}</strong>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <h4>Categoria</h4>
                                                <select class="form-control" id="exampleFormControlSelect1" name="categoria" >
                                                    <option>{{$capacitacionActualizar->categoria}}</option>
                                                    <option>Diseño</option>
                                                    <option>Desarrollo</option>
                                                    <option>Software</option>
                                                    <option>Analisis</option>
                                                    <option>Produccion</option>
                                                </select>
                                                @if ($errors->has('categoria'))
                                                <strong class="text-danger tamano">{{ $errors->first('categoria') }}</strong>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <h4>Link</h4>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fab fa-slideshare"></i>
                                                        </span>
                                                    </div>
                                                    <input class="form-control" placeholder="Link" value='{{$capacitacionActualizar->link}}' name="link" id="link" type="text" >
                                                </div>
                                                @if ($errors->has('link'))
                                                <strong class="text-danger tamano">{{ $errors->first('link') }}</strong>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10 col-md-9" style="margin-left: 72%;">
                                <button type="submit" class="btn btn-primary  mt-4">Actualizar</button>
                                <a href="{{ url('admin/capacitaciones') }}" class="btn btn-danger mt-4">Cancelar</a>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    @section('js')
    <script src="{{asset("plantillaAdmin/assets/js/bootstrap-datetimepicker.min.js")}}"></script>
    <script src="{{asset("plantillaAdmin/assets/js/select2.full.min.js")}}"></script>
    <script>
        $('#basic').select2({
            theme: "bootstrap"
        });
    </script>
    @endsection
    @endsection