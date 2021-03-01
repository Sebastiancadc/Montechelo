@extends('admin.layouts.layout')
@section('content')
<!-- Crear Noticia -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <h6 class="h2 text-white d-inline-block mb-0">{{__('Noticias')}}</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('Publicar noticia')}}</li>
                            </ol>
                        </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@if (session('noticia_crear'))
<div class="alert alert-success mt-3">
    {{session('noticia_crear')}}
</div>
@endif
<div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class="col-lg-8 card-wrapper" style="margin-top: -40px" >
            <!-- Grid system -->
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('crearnoticias') }}" enctype="multipart/form-data">
                        @csrf @method('POST')
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <input class="form-control" name="autor" value="{{Auth::user()->name}}" type="hidden">
                        <div class="form-group">

                            <div class="form-group">
                                <label class="form-control-label" for="exampleFormControlInput1">{{__('Título de la notica')}}</label>
                                <input type="text" class="form-control form-control-alternative"  value="{{ old('title') }}" name="title" maxlength="30" >
                                @if ($errors->has('title'))
                                <strong class="text-danger tamano">{{$errors->first('title') }}</strong>
                                @endif
                            </div>
                            <div class="col-md-13">
                                <label class="form-control-label" for="exampleFormControlSelect1">{{__('Categorías')}}</label>
                                <select class="form-control" name="category" >
                                    <option></option>
                                    <option>{{__('Diseño')}}</option>
                                    <option>{{__('Desarrollo')}}</option>
                                    <option>{{__('Software')}}</option>
                                    <option>{{__('Análisis')}}</option>
                                    <option>{{__('Producción')}}</option>
                                    <option>{{__('Otro')}}</option>
                                </select>

                            </div>
                            <br>
                            <div class="form-group">
                                <label class="form-control-label" for="exampleFormControlTextarea1">{{__('Fecha de publicación')}}</label>
                                <div class="col-md-13">
                                   <input class="form-control" type="date" name="fecha">
                                    @if ($errors->has('fecha'))
                                    <strong class="text-danger tamano">{{$errors->first('fecha') }}</strong>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="exampleFormControlTextarea1">{{__('Contenido')}}</label>
                                <div class="col-md-13">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="3" >{{ old('body') }}</textarea>
                                    @if ($errors->has('body'))
                                    <strong class="text-danger tamano">{{$errors->first('body') }}</strong>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="form-control-label"> {{__('Portada')}} </label>
                                    <input type="file" class="form-control form-control-alternative"  name="image" >
                                    @if ($errors->has('image'))
                                    <strong class="text-danger tamano">{{$errors->first('image') }}</strong>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-5 text-right" style="float: right;">
                                <button type="submit" class="btn btn-primary my-4">{{__('Enviar')}}</button>
                                <button onclick="window.history.back();" class="btn btn-danger my-4">{{__('Cancelar')}}</button>
                            </div>
                            </input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
