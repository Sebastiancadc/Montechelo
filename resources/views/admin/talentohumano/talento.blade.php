@extends('admin.layouts.layout')
@section('content')
<div class="header bg-primary pb-6 imgtalentoh">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                </div>
                <div class="col-lg-6 col-5 text-right">
                </div>
            </div>
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row card-wrapper">
        <div class="col-lg-4">
            <div class="card card-lift--hover shadow border-0">
                <div class="card-body epep">
                    <a href="{{url('noticiausu')}}">
                        <img src="{{asset("plantilla/img/theme/noticias.png")}}" class="rounded-circle img-center img-fluid tarjetastalento">
                        <div class="pt-4 text-center">
                            <h5 class="h3 title">
                                <span class="d-block mb-1">Noticias de interés</span>
                                <small class="h4 font-weight-light text-muted"> Aquí encontrarás las últimas noticias.</small>
                            </h5>
                            <div class="mt-3">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-lift--hover shadow border-0">
                <div class="card-body epep">
                    <style>
                    </style>
                    <a href="{{url('capacitaciones')}}">
                        <img src="{{asset("plantilla/img/theme/capacitacion.png")}}" class="rounded-circle img-center img-fluid tarjetastalento">
                        <div class="pt-4 text-center">
                            <h5 class="h3 title">
                                <span class="d-block mb-1">Capacitaciones</span>
                                <small class="h4 font-weight-light text-muted">Aquí encontrarás recursos para mejorar tu formación.</small>
                            </h5>
                            <div class="mt-3">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-lift--hover shadow border-0">
                <div class="card-body epep">
                    <a href="{{url('pausasactivas')}}">
                        <img src="{{asset("plantilla/img/theme/pausas.png")}}" class="rounded-circle img-center img-fluid tarjetastalento">
                        <div class="pt-4 text-center">
                            <h5 class="h3 title">
                                <span class="d-block mb-1">Pausas activas</span>
                                <small class="h4 font-weight-light text-muted"> Tómate un descanso.</small>
                            </h5>
                            <div class="mt-3">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('admin.modales.modalCampos')
    @include('admin.modales.modalPausas')
    @include('admin.layouts.footer')
</div>
@section('js')
<script src="https://cdn.rawgit.com/jackmoore/colorbox/master/jquery.colorbox-min.js"></script>
<script src="{{asset("pausasacitvas/pausas.js")}}"></script>
@endsection
@endsection