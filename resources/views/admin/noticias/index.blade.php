@extends('admin.layouts.layoutAdmin')
@section('contents')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            @include('admin.noticias.estadisticas')
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
                                <h4 class="card-title">Gestión de Noticias</h4>
                                <a class="btn btn-primary btn-round ml-auto" href="{{ url('crearnoticia') }}">
                                    <i class="fa fa-plus"></i>
                                    Crear Noticia
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Titulo</th>
                                            <th>Categoría</th>
                                            <th>Autor</th>
                                            <th>Portada</th>
                                            <th>Descripción </th>
                                            <th>Fecha</th>
                                            <th style="width: 10%">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($noticia as $item)
                                        <tr>
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->category->name}}</td>
                                            <td>{{$item->user->name}}</td>
                                            <td><a href="#" data-toggle="modal" data-target="#ver{{$item->Id_noticia}}">
                                                    <img src="{{$item->image }}" width="80" height="900" class="img-fluid"></a>
                                            </td>
                                            <td>{{$item->body}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="{{route('editarnoticiaad', $item->Id_noticia)}}" class="btn btn-link btn-primary btn-lg" data-original-title="Editar capacitacion">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <button href="#" class="btn btn-link btn-danger" data-toggle="modal" data-target="#deleteNoticia{{$item->Id_noticia}}" data-original-title="Eliminar capacitacion">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="deleteNoticia{{$item->Id_noticia}}" tabindex="-1" role="dialog" aria-labelledby="deleteUsuarioTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h3>¿Estás seguro de eliminar esta capacitacion?</h3>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form role="form" method="POST" action="{{route('eliminarnoticia',$item->Id_noticia)}}">
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
                                                    <div class="modal fade" id="ver{{$item->Id_noticia}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content" style="width: 655px;">
                                                                <div class="modal-body" style="width: 655px;">
                                                                    <img src="{{$item->image }}" class="img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </td>
                                        </tr>
                                        @endforeach
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
