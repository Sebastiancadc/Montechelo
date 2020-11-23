@extends('admin.layout')
@section('content')
<div class="header bg-primary pb-6 "style="background:

url({{asset("plantilla/img/theme/completion.png")}}); height: auto; background-repeat: no-repeat; background-size: cover;">
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
                <div class="card-body" style="background: rgba(255,255,255,1);
                background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(240,234,240,1) 100%);
                background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,1)), color-stop(100%, rgba(240,234,240,1)));
                background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%, rgb(255, 255, 255) 100%);
                background: -o-linear-gradient(top, rgba(255,255,255,1) 0%, rgb(255, 255, 255) 100%);
                background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%, rgb(255, 255, 255) 100%);
                background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgb(255, 255, 255) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f0eaf0', GradientType=0 );
                -webkit-box-shadow: -13px 13px 18px -10px rgba(0,0,0,0.51);
                -moz-box-shadow: -13px 13px 18px -10px rgba(0,0,0,0.51);
                box-shadow: -13px 13px 18px -10px rgba(0,0,0,0.51);">
                    <a href="{{url('noticiausu')}}">
                      <img src="{{asset("plantilla/img/theme/noticias.png")}}" class="rounded-circle img-center img-fluid" style="max-width: 550px; max-height: 238px;">
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
                <div class="card-body" style="background: rgba(255,255,255,1);
                background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(240,234,240,1) 100%);
                background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,1)), color-stop(100%, rgba(240,234,240,1)));
                background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%, rgb(255, 255, 255) 100%);
                background: -o-linear-gradient(top, rgba(255,255,255,1) 0%, rgb(255, 255, 255) 100%);
                background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%, rgb(255, 255, 255) 100%);
                background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgb(255, 255, 255) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f0eaf0', GradientType=0 );
                -webkit-box-shadow: -13px 13px 18px -10px rgba(0,0,0,0.51);
                -moz-box-shadow: -13px 13px 18px -10px rgba(0,0,0,0.51);
                box-shadow: -13px 13px 18px -10px rgba(0,0,0,0.51);">
                    <a href="{{url('capacitaciones')}}">
                      <img src="{{asset("plantilla/img/theme/capacitacion.png")}}" class="rounded-circle img-center img-fluid" style="max-width: 550px; max-height: 238px;">
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
                <div class="card-body" style="background: rgba(255,255,255,1);
                background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(240,234,240,1) 100%);
                background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,1)), color-stop(100%, rgba(240,234,240,1)));
                background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%, rgb(255, 255, 255) 100%);
                background: -o-linear-gradient(top, rgba(255,255,255,1) 0%, rgb(255, 255, 255) 100%);
                background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%, rgb(255, 255, 255) 100%);
                background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgb(255, 255, 255) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f0eaf0', GradientType=0 );
                -webkit-box-shadow: -13px 13px 18px -10px rgba(0,0,0,0.51);
                -moz-box-shadow: -13px 13px 18px -10px rgba(0,0,0,0.51);
                box-shadow: -13px 13px 18px -10px rgba(0,0,0,0.51);">
                    <a href="#!">
                      <img src="{{asset("plantilla/img/theme/pausas.png")}}" class="rounded-circle img-center img-fluid " style="max-width: 550px; max-height: 238px;">
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

    {{-- Modal llenar campos --}}
    @if (Auth::User()->phone == '')
    <div class="col-lg-10">
        <div class="modal fade" id="modaLlenarcampos" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered modal-" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                    <span aria-hidden="true"></span>
                    </div>
                    <div class="modal-body">
                    <p>Por favor termine el registro para poder ingresar</p>
                </div>
                    <div class="modal-footer">
                    <a href="{{ url('perfil')}}" class="btn btn-white">¡Vamos!</a>
                    </div>
                </div>
             </div>
        </div>
    </div>
    @endif
    {{-- fin modal llenar campos --}}
    <!-- Footer -->
    <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
                <div class="copyright text-center text-lg-left text-muted">
                    &copy; 2020 <a href="" class="font-weight-bold ml-1" target="">Grupo 3.</a>
                </div>
            </div>

        </div>
    </footer>
</div>
@section('js')

<script>
    $(document).ready(function()
    {
       $("#modaLlenarcampos").modal("show");
    });
  </script>
@endsection
@endsection
