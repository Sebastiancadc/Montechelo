@extends('admin.layouts.layoutAdmin')
@section('contents')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            @include('admin.capacitaciones.estadisticas')
            @if (session('agregar'))
            <div class="alert alert-primary" role="alert">
                {{(session('agregar'))}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if (session('eliminar'))
            <div class="alert alert-danger" role="alert">
                {{(session('eliminar'))}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if (session('update'))
            <div class="alert alert-warning" role="alert">
                {{(session('update'))}}
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
                                <h4 class="card-title">Gestión de Capacitaciones</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Crear Capacitacion
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('admin.capacitaciones.create')
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            {{-- <th>#</th> --}}
                                            <th>Titulo</th>
                                            <th>Fecha</th>
                                            <th>Descripción</th>
                                            <th>Categoría </th>
                                            <th>Link</th>
                                            <th style="width: 10%">Acciones</>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($capacitaciones as $item)
                                        <tr>
                                            <td>{{$item->titulo}}</td>
                                            <td>{{$item->fecha}}</td>
                                            <td>{{$item->descripcion}}</td>
                                            <td>{{$item->categoria}}</td>
                                            <td>{{$item->link}}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="{{route('editarcapacitacion',$item->id_capacitacion)}}" class="btn btn-link btn-primary btn-lg" data-original-title="Editar capacitacion">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <button href="#" class="btn btn-link btn-danger" data-toggle="modal" data-target="#deletecapacitacion{{$item->id_capacitacion}}" data-original-title="Eliminar capacitacion">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="deletecapacitacion{{$item->id_capacitacion}}" tabindex="-1" role="dialog" aria-labelledby="deleteUsuarioTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h3>¿Estás seguro de eliminar esta capacitacion?</h3>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form role="form" method="POST" action="{{route('eliminarcapacitacion',$item->id_capacitacion) }}">
                                                                    @csrf @method('DELETE')
                                                                    <div class="modal-body">
                                                                        ¡No podrás revertir esto!
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                                        <button type="sum" class="btn btn-primary">Eliminar</button>
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
        format: 'YYYY/MM/DD',
    });
    $('#datetime').datetimepicker({
        format: 'MM/DD/YYYY H:mm',
    });
    $('#basic').select2({
        theme: "bootstrap"
    });
</script>
@endsection
@endsection
