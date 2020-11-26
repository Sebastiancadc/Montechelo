<!--
@extends('admin.layout')


@section('content')

<body>
    <!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <h6 class="h2 text-white d-inline-block mb-0">Capacitaciones</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Administrador</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Capacitaciones</li>
                            </ol>
                        </nav>
                </div>

            </div>

        </div>

    </div>
</div>

<br>

<!-- Page content -->
<div class="container-fluid mt--6">
    {{-- alerta agregar--}}
    @if(session('agregar'))
    <div class="alert alert-success mt-3">
        {{session('agregar')}}
    </div>
    @endif

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
                            <h3 class="mb-0">Gestión de Usuarios</h3>
                        </div>                         
                        <div class="col-6 text-right">
                            <a href="#" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="modal" data-target="#modal-form" data-original-title="Añadir usuario">
                                <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                                <span class="btn-inner--text">Crear </span>
                            </a>
                            @include('admin.capacitaciones.create')
                        </div>                     
                    </div>
                    <br>
                    @if (session('update'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                      <span class="alert-text" data-toggle="notify" data-placement="top" data-align="center" data-type="success" data-icon="ni ni-bell-55" ><strong></strong>{{session('update')}}</span>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  @endif
                </div>               
                <!-- Light table -->
                <div class="table-responsive py-4" style="margin-top: -51px;">
                    <table class="table table-flush test" id="datatable-basic">
                        <thead class="thead-light">
                            <th>#</th>
                            <th>Titulo</th>
                            <th>Fecha</th>
                            <th>Descripción</th>
                            <th>Categoria </th>
                            <th>Link</th>                         
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach ($capacitaciones as $item)
                            <tr>
                                <td>{{$item->id_capacitacion}}</td>
                                <th>{{$item->titulo}}</th>
                                <th>{{$item->fecha}}</th>
                                <th>{{$item->descripcion}}</th>
                                <th>{{$item->categoria}}</th>
                                <th>{{$item->link}}</th>
                                <th>
                                    <a href="{{route('editarcapacitacion',$item->id_capacitacion)}}" class="table-action">
                                        <i class="fas fa-user-edit"></i>
                                    <a/>
                                    <a href="#!" class="table-action table-action-delete" data-toggle="modal" data-target="#deletecapacitacion{{$item->id_capacitacion}}" data-original-title="Eliminar novedad">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </th>
                                <div class="modal fade" id="deletecapacitacion{{$item->id_capacitacion}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <div class="card bg-secondary border-0 mb-0">

                                                    <div class="card-body px-lg-5 py-lg-5">
                                                        <div class="text-center text-muted mb-4">
                                                            <h3>¿Eliminar la capacitacion?</h3>
                                                        </div>
                                                        <form role="form" method="POST" action="{{route('eliminarcapacitacion',$item->id_capacitacion)}}">
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
    </div>
</div>
</body>
<script src="{{asset("js/numerotabla.js")}}"></script>
@endsection