@extends('admin.layouts.layout')
@section('content')
<!-- CAPACITACIONES -->
<div class="header bg-primary pb-6" style="height: 100px;">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Capacitaciones</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Capacitaciones</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <br><br><br>
            <div class="container-fluid mt--6">
                <div class="row justify-content-center">
                    <div class="col-lg-12 card-wrapper">
                        <!-- Grid system -->
                        <div class="card">
                            <div class="card-body">
                                <br>
                                @foreach ($capacitaciones as $item)
                                <div class="col-lg-4 card-wrapper" style="float: left;">
                                    <div class="card blues">
                                        <!-- Card body -->
                                        <div class="card-body awhite">
                                            <h5 class="h2 card-title mb-0 awhite">{{$item->titulo}}</h5>
                                            <small class="text-muted awhite"> {{$item->fecha}}</small>
                                            <p class="card-text mt-4">{{$item->descripcion}} </p>
                                            <cite>{{$item->categoria}}</cite>
                                            <a href="{{$item->link}} " type="button" target="_blank" class="btn btn-primary mb-3" style="float: right;"><cite>Acceder</cite></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @include('admin.layouts.footer')
                    </div>
                    @include('admin.modales.modalCampos')
                    {{-- @include('admin.modales.modalPausas') --}}
                    @endsection

                    @section('js')
                    <script src="https://cdn.rawgit.com/jackmoore/colorbox/master/jquery.colorbox-min.js"></script>
                    <script src="{{asset("pausasacitvas/pausas.js")}}"></script>
                    </body>
                    @endsection