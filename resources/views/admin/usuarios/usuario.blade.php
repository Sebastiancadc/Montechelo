@extends('admin.layouts.layoutAdmin')
@section('contents')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            @include('admin.usuarios.estadisticas')
            @if (session('crearUsuario'))
            <div class="alert alert-primary" role="alert">
                {{(session('crearUsuario'))}}
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

            @if (session('editarUsuario'))
            <div class="alert alert-warning" role="alert">
                {{(session('editarUsuario'))}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">{{__('Gestión de usuarios')}}</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    {{__('Crear administrador')}}
                                </button>
                                <span>.</span>
                                <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#addRowModal2">
                                    <i class="fa fa-plus"></i>
                                    {{__('Crear colaborador')}}
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('admin.usuarios.create')
                            @include('admin.usuarios.createcola')
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>{{__('Nombre')}}</th>
                                            <th>{{__('Correo')}}</th>
                                            <th>{{__('Género')}}</th>
                                            <th>{{__('Fecha de nacimiento')}}</th>
                                            <th>{{__('Área')}}</th>
                                            <th>{{__('Teléfono')}}</th>
                                            <th>{{__('Rol')}}</th>
                                            <th style="width: 10%">{{__('Acciones')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{$user->name}} {{$user->lastname}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->genero}}</td>
                                            <td>{{$user->cumpleanios}}</td>
                                            <td>{{$user->area}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->role}}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="{{route('editarusuario',$user->id)}}" class="btn btn-link btn-primary btn-lg" data-original-title="{{__('Editar usuario')}}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <button href="#" class="btn btn-link btn-danger" data-toggle="modal" data-target="#deleteUsuario{{$user->id}}" data-original-title="{{__('Eliminar usuario')}}">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="deleteUsuario{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteUsuarioTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h3><b>{{__('¿Está seguro de eliminar este usuario?')}}</b></h3>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form role="form" method="POST" action="{{route('eliminarusuario',$user->id) }}">
                                                                    @csrf @method('DELETE')
                                                                    <div class="modal-body">
                                                                        {{__('¡No podrás revertir esto!')}}
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('Cancelar')}}</button>
                                                                        <button type="sum" class="btn btn-primary">{{__('Eliminar')}}</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

@section('js')
<script src="{{asset("plantillaAdmin/assets/js/plugin/datatables/datatables.min.js")}}"></script>
<script src="{{asset("plantillaAdmin/assets/js/tablus.js")}}"></script>

<script src="{{asset("plantillaAdmin/assets/js/bootstrap-datetimepicker.min.js")}}"></script>
<script src="{{asset("plantillaAdmin/assets/js/select2.full.min.js")}}"></script>
<script>
    $('#datepicker').datetimepicker({
        format: 'DD/MM/YYYY',
    });
    $('#datepicker2').datetimepicker({
        format: 'DD/MM/YYYY',
    });
    $('#datetime').datetimepicker({
        format: 'MM/DD/YYYY H:mm',
    });
    $('#basic').select2({
        theme: "bootstrap"
    });
    $('#basic2').select2({
        theme: "bootstrap"
    });
</script>
@endsection
@endsection
