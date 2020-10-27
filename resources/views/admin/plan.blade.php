
@extends('admin.layout')
@section('content')

<!-- PLAN ESTRATEGICO -->
<div class="header bg-primary pb-6" style="height: 100px;">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Plan estrategico</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Plan estrategico</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">

                <section class="py-6 pb-9 bg-default" style="background:
                linear-gradient( rgba(231, 223, 223, 0), rgba(255, 255, 255, 0.527)),
                url({{asset("plantilla/img/theme/hhh.png")}}); height: 400px;">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-6">

                            <p class="lead text-white"></p>
                        </div>
                    </div>
                </section>

                <section class="section section-lg pt-lg-0 mt--7" style=" font-family: Roboto, Helvetica Neue, Arial, sans-serif;">

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">

                                <div class="row">

                                    <div class="col-lg-4">
                                        <div class="card card-lift--hover shadow border-0">
                                            <div class="card-body py-5">
                                                <h4 class="h3 text-primary text-uppercase" style="text-align: center;">Mision</h4>
                                                <p class="description mt-3" style="text-align: justify; ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa necessitatibus ut, temporibus quo tenetur fuga, corrupti repellat maiores, inventore modi illum fugit deserunt aliquam praesentium quae. Cumque beatae perspiciatis nobis.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="card card-lift--hover shadow border-0">
                                            <div class="card-body py-5">
                                                <h4 class="h3 text-primary text-uppercase" style="text-align: center;">Valores</h4>
                                                <p class="description mt-3" style="text-align: justify; ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa necessitatibus ut, temporibus quo tenetur fuga, corrupti repellat maiores, inventore modi illum fugit deserunt aliquam praesentium quae. Cumque beatae perspiciatis nobis.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="card card-lift--hover shadow border-0">
                                            <div class="card-body py-5">
                                                <h4 class="h3 text-primary text-uppercase" style="text-align: center;">Vision</h4>
                                                <p class="description mt-3" style="text-align: justify; ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa necessitatibus ut, temporibus quo tenetur fuga, corrupti repellat maiores, inventore modi illum fugit deserunt aliquam praesentium quae. Cumque beatae perspiciatis nobis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection