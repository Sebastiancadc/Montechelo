@extends('admin.layouts.layout')
@section('content')
<!-- Crear Noticia -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <h6 class="h2 text-white d-inline-block mb-0">Noticias</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Publicar noticia</li>
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
        <div class="col-lg-8 card-wrapper">
            <!-- Grid system -->
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('crearnoticias') }}" enctype="multipart/form-data">
                        @csrf @method('POST')
                        <input type="hidden" name="user_id" name="user_id" value="{{$user->id}}" ;>
                        <div class="form-group">
                            
                            <div class="form-group">
                                <label class="form-control-label" for="exampleFormControlInput1">Título de la publicación</label>
                                <input type="text" class="form-control form-control-alternative" placeholder="titulo" value="{{ old('title') }}" name="title" maxlength="30" >
                                @if ($errors->has('title'))
                                <strong class="text-danger tamano">{{$errors->first('title') }}</strong>
                                @endif
                            </div>
                           
                            <div class="form-group">
                                <label class="form-control-label">Categorias</label>
                                <select class="form-control" name="category_id" required>
                                    @foreach ($categoria as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('category_id'))
                                <strong class="text-danger tamano">{{$errors->first('category_id') }}</strong>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="exampleFormControlTextarea1">Contenido</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="3" >{{ old('body') }}</textarea>
                                    @if ($errors->has('body'))
                                    <strong class="text-danger tamano">{{$errors->first('body') }}</strong>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="form-control-label"> Portada </label>
                                    <input type="file" class="form-control form-control-alternative"  name="image" >
                                    @if ($errors->has('image'))
                                    <strong class="text-danger tamano">{{$errors->first('image') }}</strong>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-5 text-right" style="float: right;">
                                <button type="submit" class="btn btn-primary my-4">Enviar</button>
                                <button onclick="window.history.back();" class="btn btn-danger my-4">Cancelar</button>
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