@extends('admin.layouts.layoutAdmin')
@section('contents')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            @if (session('Pageedit'))
            <div class="alert alert-warning" role="alert">
                {{(session('Pageedit'))}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{__('Configuración del sitio')}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 ml-auto mr-auto" style="margin-top: -21px;">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{__('Logos - solo imagenes PNG')}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h4>{{__('Isotipo')}}</h4>
                                        <h4>{{__('80 X 80 pixeles')}}</h4>

                                        <div class="card-profile-image">
                                            <form action="{{ url('admin/fotoisotipo') }}" enctype='multipart/form-data' id="isotipoForm">
                                                @csrf
                                                <input type="file" id="isotipoInput" style="display: none" name="logoisotipo">
                                            </form>
                                            <div><img src="{{$page->logoisotipo}}" id="isotipoImage">
                                                <div id="hover"><h4>{{__('Cambiar')}} <br> {{__('isotipo')}}</h4></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h4>{{__('Login')}}</h4>
                                        <h4>{{__('80 X 80 pixeles')}}</h4>
                                        <div class="card-profile-image">
                                            <form action="{{ url('admin/fotologin') }}" enctype='multipart/form-data' id="loginForm">
                                                @csrf
                                                <input type="file" id="loginInput" style="display: none" name="logologin">
                                            </form>
                                            <div><img src="{{$page->logologin}}" id="loginImage">
                                                <div id="hover2"><h4>{{__('Cambiar')}} <br>{{__('logo login')}} </h4></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 ">
                                    <div class="form-group">
                                        <h4>{{__('Barra navegación vertical')}}</h4>
                                        <h4>{{__('200 X 70 pixeles')}}</h4>
                                        <div class="card-profile-image">
                                            <form action="{{ url('admin/fotonavvertical') }}" enctype='multipart/form-data' id="verticalForm">
                                                @csrf
                                                <input type="file" id="verticalInput" style="display: none" name="logonav">
                                            </form>
                                            <div><img src="{{$page->logonav}}" id="verticalImage">
                                                <div id="hover3"><h4>{{__('Cambiar logo vertical')}} </h4></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{__('Imagenes plan estratégico - sólo imagenes PNG')}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h4>{{__('Misión')}}</h4>
                                        <h4>{{__('693 X 500 pixeles')}}</h4>
                                        <div class="card-profile-image">
                                            <form action="{{ url('admin/imagenmision') }}" enctype='multipart/form-data' id="misionForm">
                                                @csrf
                                                <input type="file" id="misionInput" style="display: none" name="imagenmision">
                                            </form>
                                            <div><img src="{{$page->imagenmision}}" height="200" width="300" id="misionImage">
                                                <div id="hover4"><h4>{{__('Cambiar imagen misión')}}</h4></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h4>{{__('Visión')}}</h4>
                                        <h4>{{__('650 X 500 pixeles')}}</h4>
                                        <div class="card-profile-image">
                                            <form action="{{ url('admin/imagenvision') }}" enctype='multipart/form-data' id="visionForm">
                                                @csrf
                                                <input type="file" id="visionInput" style="display: none" name="imagenvision">
                                            </form>
                                            <div><img src="{{$page->imagenvision}}" height="200" width="300" id="visionImage">
                                                <div id="hover5"><h4>{{__('Cambiar imagen visión')}}</h4></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h4>{{__('Valores corporativos')}}</h4>
                                        <h4>{{__('693 X 500 pixeles')}}</h4>
                                        <div class="card-profile-image">
                                            <form action="{{ url('admin/imagenvalores') }}" enctype='multipart/form-data' id="valoresForm">
                                                @csrf
                                                <input type="file" id="valoresInput" style="display: none" name="imagenvalores">
                                            </form>
                                            <div><img src="{{$page->imagenvalores}}" height="200" width="300" id="valoresImage">
                                                <div id="hover6"><h4>{{__('Cambiar imagen valores corporativos')}} </h4></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h4>{{__('Política de calidad')}}</h4>
                                        <h4>{{__('650 X 500 pixeles')}}</h4>
                                        <div class="card-profile-image">
                                            <form action="{{ url('admin/imagenpolitica') }}" enctype='multipart/form-data' id="politicaForm">
                                                @csrf
                                                <input type="file" id="politicaInput" style="display: none" name="imagenpolitica">
                                            </form>
                                            <div><img src="{{$page->imagenpolitica}}" height="200" width="300" id="politicaImage">
                                                <div id="hover7"><h4>{{__('Cambiar imagen política de calidad')}}</h4></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h4>{{__('Plan estratégico')}}</h4>
                                        <h4>{{__('693 X 500 pixeles')}}</h4>
                                        <div class="card-profile-image">
                                            <form action="{{ url('admin/imagenplanestra') }}" enctype='multipart/form-data' id="planestraForm">
                                                @csrf
                                                <input type="file" id="planestraInput" style="display: none" name="imagenplanestra">
                                            </form>
                                            <div><img src="{{$page->imagenplanestra}}" height="200" width="300" id="planestraImage">
                                                <div id="hover8"><h4>{{__('Cambiar imagen Plan estratégico')}}</h4></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h4>{{__('Unidades estratégicas de negocio')}}</h4>
                                        <h4>{{__('693 X 500 pixeles')}}</h4>
                                        <div class="card-profile-image">
                                            <form action="{{ url('admin/imagenouniestra') }}" enctype='multipart/form-data' id="uniestraForm">
                                                @csrf
                                                <input type="file" id="uniestraInput" style="display: none" name="imagenuniestra">
                                            </form>
                                            <div><img src="{{$page->imagenuniestra}}" height="200" width="300" id="uniestraImage">
                                                <div id="hover10"><h4>{{__('Cambiar imagen unidades estratégicas de negocio')}}</h4></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{route('updatepage',$page->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="col-md-10 ml-auto mr-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('Pagina plan estratégico')}}</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h4>{{__('Misión')}}</h4>
                                            <textarea name="textmision" cols="30" rows="4">{{$page->textmision}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h4>{{__('Visión')}}</h4>
                                            <textarea name="textvision" cols="30" rows="4">{{$page->textvision}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h4>{{__('Valores corporativos')}}</h4>
                                            <textarea name="textvalores" cols="30" rows="4">{{$page->textvalores}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h4>{{__('Política de calidad')}}</h4>
                                            <textarea name="textpolitica" cols="30" rows="4">{{$page->textpolitica}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h4>{{__('Plan estratégico')}}</h4>
                                            <textarea name="textplanestr" cols="30" rows="4">{{$page->textplanestr}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h4>{{__('Organigrama')}}</h4>
                                            <textarea name="textorganigrama" cols="30" rows="4">{{$page->textorganigrama}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h4> {{__('Unidades estratégicas de negocio')}}</h4>
                                            <textarea name="textuniestra" cols="30" rows="4">{{$page->textuniestra}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 ml-auto mr-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('Colores')}}</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h4>{{__('Barra navegación horizontal')}}</h4>
                                            <div class="input-group">
                                                <input class="form-control" type="color" value="{{$page->colornavho}}" id="example-color-input" name="colornavho" style="height: 47px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h4>{{__('Barra navegación vertical')}}</h4>
                                            <div class="input-group">
                                                <input class="form-control" type="color" value="{{$page->colornavver}}" name="colornavver" id="example-color-input" style="height: 47px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h4>{{__('Botones')}}</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">

                                            <div class="input-group">
                                                <input class="form-control" type="color" value="{{$page->colorbtnprimary}}" name="colorbtnprimary" id="example-color-input" style="height: 47px;">
                                                <br>
                                                <a class="btn" style="background-color:{{$page->colorbtnprimary}};color:white;margin-left: 9px;">{{__('Por defecto')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input class="form-control" type="color" value="{{$page->colorbtndanger}}" name="colorbtndanger" id="example-color-input" style="height: 47px;">
                                                <br>
                                                <a class="btn" style="background-color:{{$page->colorbtndanger}};color:white;margin-left: 9px;">{{__('Advertencia')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">

                                            <div class="input-group">
                                                <input class="form-control" type="color" value="{{$page->colorbtnwarning}}" name="colorbtnwarning" id="example-color-input" style="height: 47px;">
                                                <br>
                                                <a class="btn" style="background-color:{{$page->colorbtnwarning}};color:white;margin-left: 9px;">{{__('Urgente')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h4>{{__('Títulos')}}</h4>
                                            <div class="input-group">
                                                <input class="form-control" type="color" value="{{$page->colortitulo}}" name="colortitulo" id="example-color-input" style="height: 47px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h4>{{__('Texto')}}</h4>
                                            <div class="input-group">
                                                <input class="form-control" type="color" value="{{$page->colortexto}}" name="colortexto" id="example-color-input" style="height: 47px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-left: 107px; margin-top: -14px;">{{__('Editar')}}</button>
            </div>
            </form>
            <div>
            </div>
        </div>
    </div>
</div>
</div>
@section('js')
<script src="{{asset("js/fotoperfil.js")}}"></script>
@endsection
@endsection
