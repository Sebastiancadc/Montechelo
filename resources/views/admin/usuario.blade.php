
@extends('admin.layout')
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
                                    <span class="btn-inner--text">Crear colaborador</span>
                                </a>
                                @include('admin.forms.create')
                            </div>                     
                            <div class="col-6 text-right">
                                <a href="#" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="modal" data-target="#modal-forms" data-original-title="Añadir admin" style="    margin-right: -69%;
                                margin-top: -54px;">
                                    <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                                    <span class="btn-inner--text">Crear administrador</span>
                                   
                                </a>
                                @include('admin.forms.crearUserAdmin')
                            </div>
                        </div>
                  @if (session('eliminarusuario'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text" data-toggle="notify" data-placement="top" data-align="center" data-type="danger" data-icon="ni ni-bell-55" ><strong></strong>{{session('eliminarusuario')}}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                  @if (session('editarUsuario'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <span class="alert-icon"><i class="ni ni-like-2"></i></span>
              <span class="alert-text" data-toggle="notify" data-placement="top" data-align="center" data-type="success" data-icon="ni ni-bell-55" ><strong></strong>{{session('editarUsuario')}}</span>
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
                               
                                    <th scope="col" class="sort" >#</th>
                                    <th scope="col" class="sort" >Nombre</th>
                                    <th scope="col" class="sort" >Correo</th>
                                    <th scope="col" class="sort" >Género</th>
                                    <th scope="col" class="sort" >Fecha de nacimiento</th>
                                    <th scope="col" class="sort" >Área</th>
                                    <th scope="col" class="sort" >Teléfono</th>
                                    <th scope="col" class="sort" >Rol</th>
                                    {{--<th scope="col" class="sort" data-sort="cédula">Cédula</th>--}}
                                    {{-- <th scope="col" class="sort" data-sort="dirección">Dirección</th>
                                    <th scope="col" class="sort" data-sort="estado">Estado</th> --}}
                                    <th scope="col" class="sort" data-sort="acciones">Acciones</th>
                                
                            </thead>
                            <tbody>


                                @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <span class="text-muted"></span>
                                    </td>
                                   
                                    <td>
                                        <span class="text-muted">{{$user->name}} {{$user->lastname}}</span>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{$user->email}}</span>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{$user->genero}}</span>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{$user->cumpleanios}}</span>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{$user->area}}</span>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{$user->phone}}</span>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{$user->role}}</span>
                                    </td>
                                    
                                    <td class="table-actions">
                                       
                                        <a href="{{route('editarusuario',$user->id)}}" class="table-action" data-original-title="Editar usuario">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                        <a href="#" class="table-action table-action-delete" data-toggle="modal" data-target="#deleteUsuario{{$user->id}}" data-original-title="Eliminar usuario">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    <div class="col-md-4">
                        
                                            <div class="modal fade" id="deleteUsuario{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                              <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-body p-0">
                                                    <div class="card bg-secondary border-0 mb-0">
                                        
                                                      <div class="card-body px-lg-5 py-lg-5">
                                                        <div class="text-center text-muted mb-4">
                                                          <h3>Eliminar el usuario</h3>
                                                        </div>
                                                        <form role="form" method="POST" action="{{route('eliminarusuario',$user->id) }}" >
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
                     
                     
                    </div>













                    
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                {{$users->links()}}
                            </ul>
                        </nav>
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
    <script>
        var addNumeration = function(cl){
          var table = document.querySelector('table.' + cl)
          var trs = table.querySelectorAll('tr')
          var counter = 1
          
          Array.prototype.forEach.call(trs, function(x,i){
            var firstChild = x.children[0]
            if (firstChild.tagName === 'TD') {
              var cell = document.createElement('td')
              cell.textContent = counter ++
              x.insertBefore(cell,firstChild)
            } else {
              firstChild.setAttribute('colspan',2)
            }
          })
        }
        addNumeration("test")
        </script>
    @endsection
