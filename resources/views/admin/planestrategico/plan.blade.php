@extends('admin.layouts.layout')
@section('content')
<?php
$page = Illuminate\Support\Facades\DB::table('settings-page')->select('*')->first();
?>
<div class="container-fluid mt--2">
    <div class="card-body">
        <div class="row ">
            <div class="col-11 col-md-4 ">
                <span class="trasparentee">
                    <div>
                        <h1></h1>
                        <div class="lineart"></div>
                        <br><br><br><br>
                        <p>
                            <h1 style="font-size: 2.625rem;">Plan Estratégico </h1>
                        </p>
                    </div>
                </span>
            </div>
            <div class="col-18 col-md-8">
                <span>
                    <img src="https://www.edventure.es/images/2020/01/13/plan-estrategico.png" height="500" width="693">
                </span>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="card-body">
        <div class="row ">
            <div class="col-11 col-md-4 ">
                <span class="trasparentee">
                    <div>
                        <br><br>
                        <h1>Misión</h1>
                        <div class="lineart2"></div>
                        <p>{{$page->textmision}}</p>
                    </div>
                </span>
            </div>
            <div class="col-18 col-md-8">
                <span>
                    <img src="{{$page->imagenmision}}" height="500" width="693">
                </span>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="card-body">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row ">
            <div class="col-18 col-md-8">
                <span>
                    <img src="{{$page->imagenvision}}" height="500" width="650">
                </span>
            </div>
            <div class="col-11 col-md-4">
                <span class="trasparentee">
                    <div>
                        <br><br>
                        <h1>Visión</h1>
                        <div class="lineart2"></div>
                        <p>{{$page->textvision}}</p>
                    </div>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="card-body">
        <div class="row ">
            <div class="col-11 col-md-4 ">
                <span class="trasparentee">
                    <div>
                        <br><br>
                        <h1>Valores corporativos</h1>
                        <div class="lineart3"></div>
                        <p>{{$page->textvalores}}</p>
                    </div>
                </span>
            </div>
            <div class="col-18 col-md-8">
                <span>
                    <img src="{{$page->imagenvalores}}" height="500" width="693">
                </span>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="card-body">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row ">
            <div class="col-18 col-md-8">
                <span>
                    <img src="{{$page->imagenpolitica}}" height="500" width="650">
                </span>
            </div>
            <div class="col-11 col-md-4">
                <span class="trasparentee">
                    <div>
                        <br><br>
                        <h1>Política de calidad</h1>
                        <div class="lineart3"></div>
                        <p>{{$page->textpolitica}}</p>
                    </div>
                </span>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid mt-5">
    <div class="card-body">
        <div class="row ">
            <div class="col-11 col-md-4 ">
                <span class="trasparentee">
                    <div>
                        <br><br>
                        <h1>Plan estratégico</h1>
                        <div class="lineart4"></div>
                        <p>{{$page->textplanestr}}</p>
                    </div>
                </span>
            </div>
            <div class="col-18 col-md-8">
                <span>
                    <img src="{{$page->imagenplanestra}}" height="500" width="693">
                </span>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-5">
    <div class="card-body">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row ">
            <div class="col-18 col-md-8">
                <span>
                    <img src="{{$page->imagenorganigrama}}" height="500" width="650">
                </span>
            </div>
            <div class="col-11 col-md-4">
                <span class="trasparentee">
                    <div>
                        <br><br>
                        <h1>Organigrama</h1>
                        <div class="lineart5"></div>
                        <p>{{$page->textorganigrama}}</p>
                    </div>
                </span></div>
        </div>
    </div>
</div>
<div class="container-fluid mt-5">
    <div class="card-body">
        <div class="row ">
            <div class="col-11 col-md-4 ">
                <span class="trasparentee">
                    <div>
                        <br><br>
                        <h1>Unidades estratégicas de negocio</h1>
                        <div class="lineart6"></div>
                        <p>{{$page->textuniestra}}</p>
                    </div>
                </span>
            </div>
            <div class="col-18 col-md-8">
                <span>
                    <img src="{{$page->imagenuniestra}}" height="500" width="693">
                </span>
            </div>
        </div>
    </div>
</div>
@include('admin.configuracionweb.css2')
@include('admin.modales.modalCampos')
{{-- @include('admin.modales.modalPausas') --}}
@section('js')
<script src="https://cdn.rawgit.com/jackmoore/colorbox/master/jquery.colorbox-min.js"></script>
<script src="{{asset("pausasacitvas/pausas.js")}}"></script>
@endsection
@endsection