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
          <form action="{{route('updatepage',$page->id)}}" method="POST">
            @method('PUT')
            @csrf
          <div class="row">
            <div class="col-md-10 ml-auto mr-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Configuración  del sitio</h4>
                    </div>                   
                </div>
            </div>
                <div class="col-md-10 ml-auto mr-auto" style="margin-top: -21px;">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Logos - solo imagenes PNG</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h4>Isotipo</h4>
                                        <h4>80 X 80 pixeles</h4>
                                        <div class="card-profile-image">
                                            <form action="{{ url('admin/fotoisotipo') }}" enctype='multipart/form-data' id="isotipoForm">
                                                @csrf 
                                                <input type="file" id="isotipoInput" style="display: none" name="logoisotipo" >
                                            </form>
                                            <div><img src="{{$page->logoisotipo}}" id="isotipoImage"></div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h4>Login</h4>
                                        <h4>80 X 80 pixeles</h4>
                                        <div class="card-profile-image">
                                            <form action="{{ url('admin/fotologin') }}" enctype='multipart/form-data' id="loginForm">
                                                @csrf 
                                                <input type="file" id="loginInput" style="display: none" name="logologin" >
                                            </form>
                                            <div><img src="{{$page->logologin}}" id="loginImage" ></div>
                                        </div>
                                    </div>
                                    </div>
                                <div class="col-md-4 ">
                                    <div class="form-group">
                                        <h4>Barra navegación vertical</h4>
                                        <h4>200 X 70 pixeles</h4>
                                        <div class="card-profile-image">
                                            <form action="{{ url('admin/fotonavvertical') }}" enctype='multipart/form-data' id="verticalForm">
                                                @csrf 
                                                <input type="file" id="verticalInput" style="display: none" name="logonav" >
                                            </form>
                                            <div><img src="{{$page->logonav}}" id="verticalImage" ></div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-md-10 ml-auto mr-auto" >
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Colores</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h4>Barra navegación horizontal</h4>
                                    <div class="input-group">
                                        <input class="form-control" type="color" value="{{$page->colornavho}}" id="example-color-input" name="colornavho" style="height: 47px;" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h4>Barra navegación vertical</h4>
                                    <div class="input-group">
                                        <input class="form-control" type="color" value="{{$page->colornavver}}"  name="colornavver" id="example-color-input" style="height: 47px;" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <h4>Botones</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    
                                    <div class="input-group">
                                        <input class="form-control" type="color" value="{{$page->colorbtnprimary}}"  name="colorbtnprimary" id="example-color-input" style="height: 47px;">
                                        <br>
                                        <a class="btn" style="background-color:{{$page->colorbtnprimary}};color:white;margin-left: 9px;" >Primary</a>   
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    
                                    <div class="input-group">
                                        <input class="form-control" type="color" value="{{$page->colorbtndanger}}"  name="colorbtndanger" id="example-color-input" style="height: 47px;">
                                        <br>
                                        <a class="btn" style="background-color:{{$page->colorbtndanger}};color:white;margin-left: 9px;" >Danger</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    
                                    <div class="input-group">
                                        <input class="form-control" type="color" value="{{$page->colorbtnwarning}}"  name="colorbtnwarning" id="example-color-input" style="height: 47px;">
                                        <br>
                                        <a class="btn" style="background-color:{{$page->colorbtnwarning}};color:white;margin-left: 9px;" >Warnning</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h4>Titulos</h4>
                                    <div class="input-group">
                                        <input class="form-control" type="color" value="{{$page->colortitulo}}"  name="colortitulo" id="example-color-input" style="height: 47px;" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h4>Texto</h4>
                                    <div class="input-group">
                                        <input class="form-control" type="color" value="{{$page->colortexto}}"  name="colortexto" id="example-color-input" style="height: 47px;" >
                                    </div>
                                </div>
                            </div>

                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-left: 92px;
        margin-top: -19px;">Editar</button>
        </form>
        </div>               
    </div>
</div>
</div>
@section('js')
<script src="{{asset("js/fotoperfil.js")}}"></script>
@endsection
@endsection
