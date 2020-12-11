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
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>Titulo</th>
                                            <th>Categoría</th>
                                            <th>Autor</th>
                                            <th>Portada</th>
                                            <th>Descripcion</th>
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
                                            <td><img src="{{ $item->image }}" width="50" height="50" class="img-fluid">
                                            </td>
                                            <td>{{$item->body}}</td>
                                            <td>{{$item->created_at}}</td>

                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="{{route('editarnoticiaad', $item->Id_noticia)}}"  class="btn btn-link btn-primary btn-lg" data-original-title="Editar capacitacion">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <button href="#" class="btn btn-link btn-danger" data-toggle="modal" data-target="#deleteNoticia{{$item->Id_noticia}}"  data-original-title="Eliminar capacitacion">
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
                                                                <form role="form" method="POST" action="{{route('eliminarnoticia',$item->Id_noticia)}}" >
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







{{--

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-5">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="mb-0">Gestión de Noticias</h3>
                            </div>
                        </div>
                    </div>

                    @if (Session::has('message'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                      <span class="alert-text" data-toggle="notify" data-placement="top" data-align="center" data-type="danger" data-icon="ni ni-bell-55" ><strong></strong>{{ Session::get('message') }}</span>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  @endif
<!-- Light table -->
<div class="table-responsive">

    <table class="table align-items-center table-flush test">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="title">#</th>
                <th scope="col" class="sort" data-sort="title">Titulo</th>
                <th scope="col" class="sort" data-sort="category">Categoría</th>
                <th scope="col" class="sort" data-sort="autor">Autor</th>
                <th scope="col" class="sort" data-sort="image">Portada</th>
                <th scope="col" class="sort" data-sort="created_at">Fecha</th>
                <th scope="col" class="sort" data-sort="Acciones">Acciones</th>
        </thead>
        <tbody>

            @foreach ($noticia as $item)
            <tr>
                <td>
                    <span class="text-muted"></span>
                </td>
                <td>
                    <span class="text-muted">{{$item->title}}</span>
                </td>
                <td>
                    <span class="text-muted">{{$item->category->name}}</span>
                </td>
                <td>
                    <span class="text-muted">{{$item->user->name}}</span>
                </td>
                <td>
                    <img src="{{ $item->image }}" width="50" height="50" class="img-fluid">
                </td>

                <td>
                    <span class="text-muted">{{$item->created_at}}</span>
                </td>


                <td class="table-actions">

                    <a href="{{route('editarnoticia', $item->Id_noticia)}}" class="table-action" data-original-title="Editar noticia">
                        <i class="fas fa-user-edit"></i>
                    </a>
                    <a href="#!" class="table-action table-action-delete" data-toggle="modal" data-target="#deleteNoticia{{$item->Id_noticia}}" data-original-title="Eliminar noticia">
                        <i class="fas fa-trash"></i>
                    </a>

                    <div class="col-md-4">

                        <div class="modal fade" id="deleteNoticia{{$item->Id_noticia}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                            <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="card bg-secondary border-0 mb-0">

                                            <div class="card-body px-lg-5 py-lg-5">
                                                <div class="text-center text-muted mb-4">
                                                    <h3>¿Está segur@ de eliminar esta noticia?</h3>
                                                </div>
                                                <form role="form" method="POST" action="{{route('eliminarnoticia',$item->Id_noticia)}}">
                                                    @csrf @method('DELETE')

                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary my-4">Eliminar</button>
                                                        <button class="btn btn-danger ml-auto" data-dismiss="modal">Cancelar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if (session('eliminarnoticia'))
    <div class="alert alert-success" role="alert">
        {{session('eliminarnoticia')}}
    </div>
    @endif
</div>
<div class="card-footer py-4">
    <nav aria-label="...">
        <ul class="pagination justify-content-end mb-0">
            {{$noticia->links()}}
        </ul>
    </nav>
</div>
</div>
</div>
</div>

</div>
<script src="{{asset("js/numerotabla.js")}}"></script>
@endsection

 --}}
