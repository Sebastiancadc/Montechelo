@extends('admin.layouts.layoutAdmin')
@section('contents')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            @include('admin.calendario.estadisticas')
            @if (session('crearevento'))
            <div class="alert alert-primary" role="alert">
                {{(session('crearevento'))}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if (session('seeliminoad'))
            <div class="alert alert-danger" role="alert">
                {{(session('seeliminoad'))}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if (session('editarevento'))
            <div class="alert alert-warning" role="alert">
                {{(session('editarevento'))}}
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
                                <h4 class="card-title">Gestión de Eventos</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Crear evento
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('admin.calendario.crear')
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Titulo</th>
                                            <th>Descripción</th>
                                            <th>Fecha inicial</th>
                                            <th>Fecha final</th>
                                            <th>Tipo</th>
                                            <th style="width: 10%">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($eventos as $item)
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->start_time}}</td>
                                            <td>{{$item->end_time}}</td>
                                            <td>
                                                {{$item->className}}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="{{route('verEventos',$item->id)}}" class="btn btn-link btn-secondary btn-lg">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{route('verEventoad',$item->id)}}" class="btn btn-link btn-primary btn-lg">
                                                        <i class="fas fa-user-edit"></i>
                                                    </a>
                                                    <button href="#" class="btn btn-link btn-danger" data-toggle="modal" data-target="#deleteEvento{{$item->id}}">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="deleteEvento{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteEventoTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h3>¿Estás seguro?</h3>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form role="form" method="POST" action="{{route('eliminarEventosad',$item->id) }}">
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
    $('#basic').select2({
        theme: "bootstrap"
    });
    $('#datetime').datetimepicker({
        format: 'MM/DD/YYYY H:mm',
    });
    $('#datetimes').datetimepicker({
        format: 'MM/DD/YYYY H:mm',
    });
</script>
@endsection
@endsection
