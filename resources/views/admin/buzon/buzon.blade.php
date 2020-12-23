@extends('admin.layouts.layout')
@section('content')
<!-- BUZON DE SUGERENCIAS -->
<div class="header bg-primary pb-6" style="height: 100px;">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Buzon de sugerencias</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Buzon</li>
                        </ol>
                    </nav>
                </div>
                <br>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ url('crearbuzon')}}" class="btn btn-sm btn-neutral">Agregar</a>
                </div>
            </div>
        </div>
    </div>
    @if (session('buzon_crear'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-text" data-toggle="notify" data-placement="top" data-align="center" data-type="danger" data-icon="ni ni-bell-55"><strong></strong>{{session('buzon_crear')}}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <br><br><br>
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <section class="py-6 pb-9 bg-default ggtr">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-6">
                            <p class="lead text-white"> </p>
                        </div>
                    </div>
                </section>
                <section class="section section-lg pt-lg-0 mt--7" >
                    <div class="container">
                        <div class="row justify-content-center" <div class="col-lg-12">
                            <div class="row">
                                @foreach ($buzon as $item)
                                <div class="col-lg-4">
                                    <div class="card card-lift--hover shadow border-0">

                                        <div class="card-body py-5 rounded-sm  tgg">
                                            <h4>{{$item->tipo_sugerencia}}</h4>
                                            <p class="description mt-3" style="text-align: justify;">{{$item->descripcion}}</p>
                                            <h4 class="zulcs">{{$item->area}}</h4>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
            </div>

            </section>
        </div>
        @include('admin.layouts.footer')
    </div>
    @include('admin.modales.modalCampos')
    {{-- @include('admin.modales.modalPausas') --}}
</div>
@section('js')
<script src="https://cdn.rawgit.com/jackmoore/colorbox/master/jquery.colorbox-min.js"></script>
<script src="{{asset("pausasacitvas/pausas.js")}}"></script>
</body>
@endsection
@endsection