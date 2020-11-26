@extends('admin.layout')
@section('content')
<div class="header bg-primary pb-6 "style="background:
linear-gradient( rgba(231, 223, 223, 0), rgba(255, 255, 255, 0.527)),
url({{asset("plantilla/img/theme/solis.png")}}); height: auto; background-repeat: no-repeat; background-size: cover;">
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
                <div class="card-body epep" >
                    <a href="{{url('crearsolicitud')}}">
                      <img src="{{asset("plantilla/img/theme/vacations.png")}}" class="rounded-circle img-center img-fluid" style="max-width: 550px; max-height: 238px;">
                        <div class="pt-4 text-center">
                            <h5 class="h3 title">
                                <span class="d-block mb-1">Vacaciones y Permisos</span>
                                <small class="h4 font-weight-light text-muted"> Solicita tus vacaciones y permisos.</small>
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
                <div class="card-body epep" >
                    <a href="{{ URL::to('/solicitudes/pdf') }}">
                      <img src="{{asset("plantilla/img/theme/labo.png")}}" class="rounded-circle img-center img-fluid" style="max-width: 550px; max-height: 238px;">
                        <div class="pt-4 text-center">
                            <h5 class="h3 title">
                                <span class="d-block mb-1">Certificado laboral</span>
                                <small class="h4 font-weight-light text-muted"> Descarga tu certificado laboral.</small>
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
                    <a href="{{ URL::to('/nomina/pdf') }}">
                      <img src="{{asset("plantilla/img/theme/nomina.png")}}" class="rounded-circle img-center img-fluid " style="max-width: 550px; max-height: 238px;">
                        <div class="pt-4 text-center">
                            <h5 class="h3 title">
                                <span class="d-block mb-1">Certificado de nómina</span>
                                <small class="h4 font-weight-light text-muted"> Descarga tu certificado de nómina.</small>
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
  <script src="https://cdn.rawgit.com/jackmoore/colorbox/master/jquery.colorbox-min.js"></script>
  <script src="{{asset("pausasacitvas/pausas.js")}}"></script>
@endsection
@endsection
