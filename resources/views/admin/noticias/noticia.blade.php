@extends('admin.layouts.layout')
@section('content')
<link rel="stylesheet" href="{{asset("plantilla/css/blog.css")}}" type="text/css">
<link rel="stylesheet" href="{{asset("plantilla/css/landing.css")}}" type="text/css">
<div id="headerWrapper" class="container-fluid navHeaderWrapper header-image">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  mt-5" style="padding-right: 20px;">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-2 align-self-center  mb-lg-0 mb-5">
                <div class="site-header-inner  mt-lg-0 mt-5">
                    <h2 class="">Noticias de intéres</h2>
                    <p>Descubre lo último en actualidad y mantente conectado.</p>
                    @if (Auth::user()->role == 'admin')
                    <a href="{{ url('crearnoticia') }}" class="btn btn-sm btn-neutral mt-5">Agregar</a>
                    @endif
                </div>
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
@include('admin.modales.modalCampos')
{{-- @include('admin.modales.modalPausas') --}}
@section('js')
<script src="https://cdn.rawgit.com/jackmoore/colorbox/master/jquery.colorbox-min.js"></script>
<script src="{{asset("pausasacitvas/pausas.js")}}"></script>
@endsection
@endsection