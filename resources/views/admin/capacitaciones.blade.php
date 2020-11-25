@extends('admin.layout')
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

                                    <div class="card" style=" background: -prefix-linear-gradient(left top, #002A60, #0098C9) !important;
                                                    background: linear-gradient(to bottom right, #002A60, #0098C9)!important;">
                                        <!-- Card body -->
                                        <div class="card-body" style="color:white !important;">
                                            <h5 class="h2 card-title mb-0" style="color:white !important;">{{$item->titulo}}</h5>
                                            <small class="text-muted" style="color:white !important;"> {{$item->fecha}}</small>
                                            <p class="card-text mt-4">{{$item->descripcion}} </p>

                                            <cite title="Source Title">{{$item->categoria}}</cite>

                                            <a href="{{$item->link}} " type="button" target="_blank" class="btn btn-primary mb-3" style="float: right;"><cite title="Source Title">acceder</cite></a>



                                        </div>
                                    </div>


                                </div>
                                @endforeach







                            </div>
                        </div>
                    </div>




{{--
                    <div class="container-fluid " style="margin-top: 11%">
                <div class="row">

@foreach ($capacitaciones as $item)
                    <div class="col-4"  style="margin-bottom:7% ">
                        <section class="section section-lg pt-lg-0 mt--7" style=" font-family: Roboto, Helvetica Neue, Arial, sans-serif;">
                            <div class="container">
                                <div class="row " <div class="col-lg-2">
                                    <div class="card bg-gradient-default" style="width:400px ;
                                        background: -prefix-linear-gradient(left top, #002A60, #0098C9) !important;
                                        background: linear-gradient(to bottom right, #002A60, #0098C9)!important;">

                                        <div class="card-body">
                                            <h1 class="card-title text-white">{{$item->titulo}}</h1>
                    <h3 class="blockquote" style="font-size: 15px; margin-top: -25px">
                        {{$item->fecha}}
                    </h3>

                    <blockquote class="blockquote text-white mb-0">
                        <p>{{$item->descripcion}} </p>
                        <br>
                        <cite title="Source Title">{{$item->categoria}}</cite>

                        <a href="{{$item->link}} " type="button" target="_blank" class="btn btn-primary mb-3" style="float: right;">
                            <cite title="Source Title">acceder</cite>
                        </a>
                    </blockquote>


                </div>

            </div>
        </div>
    </div>
    </section>
</div>
@endforeach


</div>

</div> --}}
</div>
</div>
@endsection
