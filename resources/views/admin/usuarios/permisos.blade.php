@extends('admin.layouts.layoutAdmin')
@section('contents')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            @if (session('Rol'))
            <div class="alert alert-primary" role="alert">
                {{(session('Rol'))}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if (session('eliminarusuario'))
            <div class="alert alert-danger" role="alert">
                {{(session('eliminarusuario'))}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if (session('Permisosedit'))
            <div class="alert alert-warning" role="alert">
                {{(session('Permisosedit'))}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Gestión de Permisos</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Crear un rol
                                </button>
                            </div>
                        </div>
                    </div>
                    @include('admin.usuarios.createpermiso')
                    @foreach ($permisos as $permiso)
                    <div id="accordion" style="margin-top: -17px;">
                        <div class="card">
                            <div class="card-header collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne{{$permiso->Id_Rol}}" aria-expanded="false" aria-controls="collapseOne">
                                <div class="span-title">
                                    <h3 class="text-section">{{$permiso->Roles}} - Modulos</h3>
                                </div>
                                <div class="span-mode"></div>
                            </div>
                            <div id="collapseOne{{$permiso->Id_Rol}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <h4 class="colorsito">Chat</h4>
                                            @if ($permiso->chat_status == '1')
                                            <span class="badge badge-lg badge-success">
                                                Habilitado
                                                @else
                                                <span class="badge badge-lg badge-danger">
                                                    Deshabilitado
                                                    @endif
                                        </li>
                                        <li class="list-group-item">
                                            <h4 class="colorsito">Directorio</h4>
                                            @if ($permiso->directorio_status == '1')
                                            <span class="badge badge-lg badge-success">
                                                Habilitado
                                                @else
                                                <span class="badge badge-lg badge-danger">
                                                    Deshabilitado
                                                    @endif
                                        </li>
                                        <li class="list-group-item">
                                            <h4 class="colorsito">Talento Humano</h4>
                                            @if ($permiso->talento_status == '1')
                                            <span class="badge badge-lg badge-success">
                                                Habilitado
                                                @else
                                                <span class="badge badge-lg badge-danger">
                                                    Deshabilitado
                                                    @endif
                                        </li>
                                        <li class="list-group-item">
                                            <h4 class="colorsito">Repositorio</h4>
                                            @if ($permiso->repositorio_status == '1')
                                            <span class="badge badge-lg badge-success">
                                                Habilitado
                                                @else
                                                <span class="badge badge-lg badge-danger">
                                                    Deshabilitado
                                                    @endif
                                        </li>
                                        <li class="list-group-item">
                                            <h4 class="colorsito">Calendario</h4>
                                            @if ($permiso->calendario_status == '1')
                                            <span class="badge badge-lg badge-success">
                                                Habilitado
                                                @else
                                                <span class="badge badge-lg badge-danger">
                                                    Deshabilitado
                                                    @endif
                                        </li>
                                        <li class="list-group-item">
                                            <h4 class="colorsito">Solicitud</h4>
                                            @if ($permiso->solicitud_status == '1')
                                            <span class="badge badge-lg badge-success">
                                                Habilitado
                                                @else
                                                <span class="badge badge-lg badge-danger">
                                                    Deshabilitado
                                                    @endif
                                        </li>
                                        <li class="list-group-item">
                                            <h4 class="colorsito">Buzon de sugerencias</h4>
                                            @if ($permiso->buzon_status == '1')
                                            <span class="badge badge-lg badge-success">
                                                Habilitado
                                                @else
                                                <span class="badge badge-lg badge-danger">
                                                    Deshabilitado
                                                    @endif
                                        </li>
                                        <li class="list-group-item">
                                            <h4 class="colorsito">Plan estrategico</h4>
                                            @if ($permiso->plan_status == '1')
                                            <span class="badge badge-lg badge-success">
                                                Habilitado
                                                @else
                                                <span class="badge badge-lg badge-danger">
                                                    Deshabilitado
                                                    @endif
                                        </li>
                                        <li class="list-group-item">
                                            <h4 class="colorsito">Novedad</h4>
                                            @if ($permiso->novedad_status == '1')
                                            <span class="badge badge-lg badge-success">
                                                Habilitado
                                                @else
                                                <span class="badge badge-lg badge-danger">
                                                    Deshabilitado
                                                    @endif
                                        </li>
                                    </ul>
                                    <br>
                                    @if ($permiso->Roles == 'admin')
                                    @else
                                    <div class="d-flex align-items-center">
                                        <a href="{{route('permisoedit',$permiso->Id_Rol)}}" class="btn btn-primary  ml-auto">Ver</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<style>
    .colorsito {
        color: #444;
    }
</style>
@section('js')
<script src="{{asset("plantillaAdmin/assets/js/plugin/datatables/datatables.min.js")}}"></script>
<script src="{{asset("plantillaAdmin/assets/js/tablus.js")}}"></script>

<script src="{{asset("plantillaAdmin/assets/js/bootstrap-datetimepicker.min.js")}}"></script>
<script src="{{asset("plantillaAdmin/assets/js/select2.full.min.js")}}"></script>
<script>
    $('#datepicker').datetimepicker({
        format: 'DD/MM/YYYY',
    });
    $('#datetime').datetimepicker({
        format: 'MM/DD/YYYY H:mm',
    });
</script>
@endsection
@endsection
