@extends('admin.layout')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Noticia</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Noticia  </li>
                        </ol>
                    </nav>
                </div>
                @if (Auth::user()->role == 'admin')
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ url('crearnoticia') }}" class="btn btn-sm btn-neutral">Agregar</a>
                </div>              
                @endif
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-1 text-center">
                <div class="banner-image">
                    <img alt="cover-image" src="{{asset("plantilla/img/theme/cover.png")}}" class="img-fluid cover" style="">
                    <img alt="cover-image" src="{{asset("plantilla/img/theme/code.png")}}" class="img-fluid code" style="">
                    <img alt="cover-image" src="{{asset("plantilla/img/theme/cloud.png")}}" class="img-fluid cloud" style="">
                    <img alt="cover-image" src="{{asset("plantilla/img/theme/globe.png")}}" class="img-fluid globe" style="">

                    <img alt="cover-image" src="{{asset("plantilla/img/theme/wave-1.png")}}" class="img-fluid wave-1" style="">
                    <img alt="cover-image" src="{{asset("plantilla/img/theme/wave-2.png")}}" class="img-fluid wave-2" style="">
                    <img alt="cover-image" src="{{asset("plantilla/img/theme/wave-3.png")}}" class="img-fluid wave-3" style="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Header -->

<!-- Page content -->
<div id="articlesPostWrapper">
    <div class="container-fluid">
        <div class="row">
            <div id="articlesPostHeading" class="col-md-12">
                <h2 class="pb-4 m-0">Artículos</h2>
            </div>
            <div id="articlesPostContent" class="col-md-12 mt-5 pt-4">
                @foreach ($noticias as $item)
                <article class="mb-5 pb-5">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="thumbnail-img">
                                <img alt="blog-image" src="{{ $item->image }}" class="img-fluid  mb-md-0 mb-4">
                            </div>
                        </div>
                        <div class="col-md-8 text-md-left text-center">
                            <h4 class="post-heading">{{$item->title }}</h4>
                            <p class="meta  mb-4"><span class="post-category">{{ $item->category->name}}</span> / <span class="post-meta-info">{{ $item->created_at->format('d/m/Y') }}</span></p>

                            <p class="post-text text-justify">{{ substr($item->body, 0,90) }}...</p>
                            <div class="row mt-5">
                                <div class="col-md-8 col-sm-8 col-12">
                                    <div class="media usr-meta mx-auto mx-sm-0 mb-sm-0 mb-4">
                                        <img alt="admin-profile" src="{{ $item->user->photo }}" class="meta-usr-profile img-fluid rounded-circle mr-3">
                                        <div class="media-body">
                                            <p class="meta-usr-name">{{$item->user->name}} {{$item->user->lastname}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-12 text-center text-sm-right">
                                    <a href="{{'post'}}/{{ $item->slug }}" class="btn btn-outline-info btn-rounded">Ver artículo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- /Articles Posts -->


{{-- Modal llenar campos --}}
@if (Auth::User()->phone == '')
<div class="col-lg-10">
  <div class="modal fade" id="modaLlenarcampos" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                <span aria-hidden="true"></span>
                </div>
                <div class="modal-body">
                <p>Por favor termine el registro para poder ingresar</p>
                </div>
                <div class="modal-footer">
                <a href="{{ url('perfil')}}" class="btn btn-white">¡Vamos!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
{{-- fin modal llenar campos --}}

@section('js')
  <script src="https://cdn.rawgit.com/jackmoore/colorbox/master/jquery.colorbox-min.js"></script>
  <script src="{{asset("pausasacitvas/pausas.js")}}"></script>

@endsection
@endsection
