@extends('admin.layout')
@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Buzon de sugerencias</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Administrador</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sugerencias</li>
                            </ol>
                        </nav>
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
    <!-- Page content -->
    <div class="container-fluid mt--6">
        @if(session('eliminar'))
        <div class="alert alert-success mt-3">
            {{session('eliminar')}}
        </div>
        @endif

        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="mb-0">Gestión de sugerencias</h3>
                            </div>

                        </div>
                    </div>

                    <!-- Light table -->
                    <div class="table-responsive py-4" style="margin-top: -40px;">

                        <table class="table table-flush test" id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="nombre">#</th>
                                    <th scope="col" class="sort" data-sort="nombre">Tipo de sugerencia</th>
                                    <th scope="col" class="sort" data-sort="apellido">Descripcion</th>
                                    <th scope="col" class="sort" data-sort="género">Area</th>
                                    <th scope="col" class="sort" data-sort="género">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($buzon as $item)
                                <tr>
                                    <td>
                                        <span class="text-muted"></span>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{$item->tipo_sugerencia}}</span>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{$item->descripcion}}</span>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{$item->area}}</span>
                                    </td>

                                    <td>
                                        <a href="#!"  style="margin-left: 20px" class="table-action table-action-delete" data-toggle="modal" data-target="#deletesugerencia{{$item->Id_sugerencia}}" data-original-title="Eliminar sugerencia">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>

                                    <div class="modal fade" id="deletesugerencia{{$item->Id_sugerencia}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body p-0">
                                                    <div class="card bg-secondary border-0 mb-0">

                                                        <div class="card-body px-lg-5 py-lg-5">
                                                            <div class="text-center text-muted mb-4">
                                                                <h3>¿Eliminar la sugerencia?</h3>
                                                            </div>
                                                            <form role="form" method="POST" action="{{route('eliminarsugerencia',$item->Id_sugerencia)}}">
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



                                </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="{{asset("js/numerotabla.js")}}"></script>
    @endsection
