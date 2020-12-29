@extends('admin.layouts.layout')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Editar noticias</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Noticias</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Editar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@if (session('editarnoticia'))
<div class="alert alert-warning" role="alert">
    {{(session('editarnoticia'))}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<br>
<br>
<div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class="col-lg-8 card-wrapper">
            <!-- Grid system -->
            <div class="card">
                <div class="card-body">
                    <form action="{{url('admin/updatenoticiaus',$noticiaActualizar->Id_noticia)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="form-control-label">Categoria de la publicación</label>
                            <select class="form-control" name="category_id">
                                @foreach ($categoria as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="title">Título </label>
                            <input type="text" id="title" class="form-control form-control-alternative" value="{{$noticiaActualizar->title }}" name="title">
                            @if ($errors->has('title'))
                            <strong class="text-danger tamano">{{ $errors->first('title') }}</strong>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="competencias">Contenido</label>
                            <textarea class="form-control" id="mymce" rows="3" name="body">{{$noticiaActualizar->body }}</textarea>
                            @if ($errors->has('body'))
                            <strong class="text-danger tamano">{{ $errors->first('body') }}</strong>
                            @endif
                        </div>
                        <img src="{{$noticiaActualizar->image }}" class="img-fluid rounded img4">
                        <div class="form-group">
                            <label class="form-control-label" for="competencias">Imagen</label>
                            <input type="file" class="form-control form-control-alternative" value="{{$noticiaActualizar->image }}" name="image">
                            @if ($errors->has('image'))
                            <strong class="text-danger tamano">{{ $errors->first('image') }}</strong>
                            @endif
                        </div>
                        <div class="col-lg-6 col-5 text-right" style="float: right;">
                            <button type="submit" class="btn btn-primary my-4">Actualizar</button>
                        </div>
                    </form>
                </div>
                @if (session('update'))
                <div class="alert alert-success mt-3">
                    {{session('update')}}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection