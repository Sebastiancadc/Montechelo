@extends('admin.layouts.layout')
@section('content')
<!-- AGREGAR BUZON DE SUGERENCIAS -->
<div class="header bg-primary pb-6" style="height: 100px;">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">{{__('Buzón de sugerencias')}}</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{('Agregar sugerencia')}}</li>
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
                    <form method="POST" action="{{ url('crearsugerencias')}}">
                        @csrf @method('POST')
                        <div class="form-group">
                            @if (session('buzon_crear'))
                            <div class="alert alert-success mt-3">
                                {{session('buzon_crear')}}
                            </div>
                            @endif
                            <label class="form-control-label" for="exampleFormControlInput1" name="tipo_sugerencia">{{__('Título')}}</label>
                            <select class="form-control" id="tipo_sugerencia" name="tipo_sugerencia" >
                                <option> </option>
                                <option>{{__('Quejas')}}</option>
                                <option>{{__('Reclamos')}}</option>
                                <option>{{__('Observación')}}</option>
                                <option>{{__('Novedad')}}</option>
                                <option>{{__('Mejoras')}}</option>
                                <option>{{__('Felicitaciones')}}</option>
                            </select>
                            @if ($errors->has('tipo_sugerencia'))
                            <strong class="text-danger tamano">{{ $errors->first('tipo_sugerencia') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlTextarea1">{{__('Descripción')}}</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="{{__('Descripción')}}" ></textarea>
                            @if ($errors->has('descripcion'))
                            <strong class="text-danger tamano">{{ $errors->first('descripcion') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlSelect1" name="area" >{{__('Área')}}</label>
                            <select class="form-control" id="area" name="area">
                                <option> </option>
                                <option>{{__('Diseño')}}</option>
                                <option>{{__('Software')}}</option>
                                <option>{{__('Recursos humanos')}}</option>
                                <option>{{__('Administración')}}</option>
                            </select>
                            @if ($errors->has('area'))
                            <strong class="text-danger tamano">{{ $errors->first('area') }}</strong>
                            @endif
                        </div>
                        <div class="col-lg-6 col-5 text-right" style="float: right;">
                            <button type="submit" class="btn btn-primary my-4">{{__('Enviar')}}</button>
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
