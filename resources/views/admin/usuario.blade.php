

@extends('admin.layout')
<link rel="icon" href="{{asset("plantilla/img/theme/isotipo.png")}}" type="image/png">
@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Usuarios</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Administrador</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
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
                                   
                                    <span class="btn-inner--text">Crear</span>
                                   
                                </a>
                                @include('admin.forms.create')
                            </div>
                        </div>
                    </div>
                  
                    <!-- Light table -->
                    <div class="table-responsive">
                   
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="nombre">#</th>
                                    <th scope="col" class="sort" data-sort="nombre">Nombre</th>
                                    <th scope="col" class="sort" data-sort="apellido">Apellido</th>
                                    {{-- <th scope="col" class="sort" data-sort="username">Username</th> --}}
                                    {{-- <th scope="col" class="sort" data-sort="área">Área</th>
                                    <th scope="col" class="sort" data-sort="cédula">Cédula</th>
                                    <th scope="col" class="sort" data-sort="género">Género</th>
                                    <th scope="col" class="sort" data-sort="teléfono">Teléfono</th>
                                    <th scope="col" class="sort" data-sort="correo">Correo</th> --}}
                                    {{-- <th scope="col" class="sort" data-sort="dirección">Dirección</th>
                                    <th scope="col" class="sort" data-sort="estado">Estado</th> --}}
                                    <th scope="col" class="sort" data-sort="acciones">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($users as $user)
                                <tr>
                                   
                                    <td>
                                        <span class="text-muted">{{$user->id}}</span>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{$user->name}}</span>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{$user->email}}</span>
                                    </td>
                                    <td class="table-actions">
                                        
                                        <a href="#" class="table-action" data-toggle="modal" data-target="#editUsuario{{$user->id}}" data-original-title="Editar usuario">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                        <a href="#" class="table-action table-action-delete" data-toggle="modal" data-target="#deleteUsuario{{$user->id}}" data-original-title="Eliminar usuario">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                       
                                    </td>
                                </tr>
                                @endforeach
                                
                             
                                @include('admin.forms.edit')
                                @include('admin.forms.delete')
                            </tbody>
                        </table>

                        
                    </div>
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Anterior</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Siguiente</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection
</html>