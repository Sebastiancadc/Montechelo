@extends('admin.layouts.layoutAdmin')
@section('contents')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            @if (session('Crearv'))
            <div class="alert alert-primary" role="alert">
                {{(session('Crearv'))}}
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
            @if (session('Editarpa'))
            <div class="alert alert-warning" role="alert">
                {{(session('Editarpa'))}}
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
                                <h4 class="card-title">Gestión de Pausas activas</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Crear pausa activa
                                </button>
                            </div>
                        </div>
                    </div>
                    @include('admin.pausas-activas.create')
                    @foreach ($pausas as $pausa)
                    <div id="accordion" style="margin-top: -17px;">
                        <div class="card">
                            <div class="card-header collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne{{$pausa->id}}" aria-expanded="false" aria-controls="collapseOne">
                                <div class="span-title">
                                    <h3 class="text-section">Video</h3>
                                </div>
                                <div class="span-mode"></div>
                            </div>
                            <div id="collapseOne{{$pausa->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <video width='700' height='540' controls style="
                                    margin-left: 62px;
                                    margin-top: -73px;">
                                            <source src="{{$pausa->video}}" type='video/mp4'> </video>
                                        <br>
                                        <div class="d-flex align-items-center">
                                            <a href="{{url('admin/editarPausa',$pausa->id)}}" class="btn btn-primary  ml-auto" style="margin-right:3px;">Editar</a>

                                            <button href="#" class="btn btn-danger" data-toggle="modal" data-target="#deleteNoticia{{$pausa->id}}" data-original-title="Eliminar capacitacion">
                                                Eliminar
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteNoticia{{$pausa->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteUsuarioTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3>¿Estás seguro de eliminar esta pausa activa?</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form role="form" method="POST" action="{{url('admin/deletePausa',$pausa->id)}}">
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
@endsection