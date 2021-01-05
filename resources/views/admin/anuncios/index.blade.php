@extends('admin.layouts.layoutAdmin')
@section('contents')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            @if (session('creareanuncio'))
            <div class="alert alert-primary" role="alert">
                {{(session('creareanuncio'))}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if (session('seelimino'))
            <div class="alert alert-danger" role="alert">
                {{(session('seelimino'))}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @include('admin.anuncios.estadisticas')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Gestión de Anuncios</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Crear anuncio
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('admin.anuncios.create')
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Titulo</th>
                                            <th>Descripción</th>
                                            <th>Tipo</th>
                                            <th style="width: 10%">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($anuncios as $anuncio)
                                        <tr>
                                            <td>{{$anuncio->titulo}}</td>
                                            <td>{{$anuncio->descripcion}}</td>
                                            <td><span class="badge badge-lg badge-{{$anuncio->tipo}}">{{$anuncio->tipo}}</span></td>

                                            <td>
                                                <div class="form-button-action">
                                                    <button href="#" class="btn btn-link btn-danger" data-toggle="modal" data-target="#deleteanuncio{{$anuncio->id}}">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="deleteanuncio{{$anuncio->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h3>¿Estás seguro?</h3>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form role="form" method="POST" action="{{route('eliminaranuncio',$anuncio->id) }}">
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
                                    </tbody>

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

<!-- Datatables -->
<script src="{{asset("plantillaAdmin/assets/js/plugin/datatables/datatables.min.js")}}"></script>
<script src="{{asset("plantillaAdmin/assets/js/tablus.js")}}"></script>
<script src="{{asset("plantillaAdmin/assets/js/select2.full.min.js")}}"></script>
<!-- Bootstrap Notify -->
<script src="{{asset("plantillaAdmin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js")}}"></script>
<!-- Bootstrap Toggle -->
<script src="{{asset("plantillaAdmin/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js")}}"></script>
<!-- jQuery Scrollbar -->
<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<!-- Azzara JS -->
<script src="../../assets/js/ready.min.js"></script>
<!-- Azzara DEMO methods, don't include it in your project! -->
<script src="../../assets/js/setting-demo.js"></script>
<script>
    $('#basic').select2({
        theme: "bootstrap"
    });
</script>
@endsection
@endsection