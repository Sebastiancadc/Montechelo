@extends('admin.layouts.layout')
@section('content')
<!-- AGREGAR -->
<div class="header bg-primary pb-6" style="height: 100px;">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Pausas activas </h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class="col-lg-10 card-wrapper">
            <!-- Grid system -->
            <div class="card">
                <div class="card-body">
                    <h1 style="text-align: center">¡Bienvenido a una pausa activa dinamica!</h1>
                    <br>
                    {{-- PRIMERA PAUSA --}}
                    <div class="card" style="width: 70% !important;   margin-left:auto !important; margin-right:auto !important;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <iframe src="https://www.youtube.com/embed/VhvUnHiysQY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100% !important;height:25em;"></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="h2 card-title mb-0">
                                <font class="vetii">
                                    <font class="vetii">Pausas activas</font>
                                </font>
                            </h5>
                            <small class="text-muted">
                                <font class="vetii">
                                    <font class="vetii">Salud y bienestar en el Trabajo.</font>
                                </font>
                            </small>
                            <p class="card-text mt-4">
                                <font class="vetii">
                                    <font class="vetii">Los colaboradores llevamos semanas trabajando desde casa y es importante tener en cuenta ciertas pautas básicas para evitar dolores en el cuello y espalda. Ahí la importancia de realizar pausas activas durante el teletrabajo. <br>
                                        Por ello en esta entrada te contaremos de los ejercicios que puedes hacer en tu casa para evitar dolores, preservar una buena postura y mantener una alta energía para continuar con tus labores. </font>
                                </font>
                            </p>
                            <a href="#!" class="btn btn-link px-0">
                                <font class="vetii"></font>
                            </a>
                        </div>
                    </div>
                    {{-- SEGUNDA PAUSA --}}
                    <div class="card" style="width: 50% !important; float:left;">
                        <!-- Card image -->
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="width: 100% !important;height:100% !important;">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="plantilla/img/theme/pausasactivas/pausa1.png" class=" d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="plantilla/img/theme/pausasactivas/pausa2.png" class=" d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="plantilla/img/theme/pausasactivas/pausa3.png" class=" d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="plantilla/img/theme/pausasactivas/pausa4.png" class=" d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <h5 class="h2 card-title mb-0">
                                <font class="vetii">
                                    <font class="vetii">Pausas activas </font>
                                </font>
                            </h5>
                            <small class="text-muted">
                                <font class="vetii">
                                    <font class="vetii">Salud y bienestar en el Trabajo.</font>
                                </font>
                            </small>
                            <p class="card-text mt-4">
                                <font class="vetii">
                                    <font class="vetii">A continuación te presentamos una serie de ejercicios principalmente de elongación
                                        que puedes realizar entre tus periodos de trabajo. Recuerda realizarlos a diario, en
                                        periodos de 3 a 5 minutos cada 2 o tres horas.</font>
                                </font>
                            </p>
                            <a href="#!" class="btn btn-link px-0">
                                <font class="vetii"></font>
                            </a>
                        </div>
                    </div>
                    {{-- TERCERA PAUSA --}}
                    <div class="card" style="width: 50% !important; float:left">
                        <!-- Card body -->
                        <div class="card-body">
                            <h5 class="h2 card-title mb-0">
                                <font class="vetii">
                                    <font class="vetii">Pausas activas</font>
                                </font>
                            </h5>
                            <small class="text-muted">
                                <font class="vetii">
                                    <font class="vetii">Salud y bienestar en el Trabajo.</font>
                                </font>
                            </small>
                            <p class="card-text mt-4">
                                <font class="vetii">
                                    <font class="vetii">Las pausas activas son breves descansos durante la jornada laboral que sirven para recuperar energía, mejorar el desempeño y eficiencia en el trabajo, a través de diferentes técnicas y ejercicios que ayudan a reducir la fatiga laboral y prevenir el estrés.</font>
                                </font>
                            </p>
                            <a href="#!" class="btn btn-link px-0">
                                <font class="vetii"></font>
                            </a>
                        </div>
                        <!-- Card image -->
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="width: 100% !important;height:100% !important;">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="plantilla/img/theme/pausasactivas/secondpausa1.png" class=" d-block w-100" alt="..." style="height: ">
                                </div>
                                <div class="carousel-item">
                                    <img src="plantilla/img/theme/pausasactivas/secondpausa2.png" class=" d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="plantilla/img/theme/pausasactivas/secondpausa3.png" class=" d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layouts.footer')
</div>
@endsection