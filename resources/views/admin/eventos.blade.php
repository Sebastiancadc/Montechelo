

@extends('admin.layout')
@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Eventos</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Administrador</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Eventos</li>
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
                                <h3 class="mb-0">Gestión de Eventos</h3>
                            </div>
                            
                            <div class="col-6 text-right">
                                <a href="#" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="modal" data-target="#modal-form" data-original-title="Añadir usuario">
                                    <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                                    <span class="btn-inner--text">Crear evento</span>
                                </a>
                                @include('admin.calendario.eve')
                            </div>                     
  
                        </div>
                    </div>
        
                    <!-- Light table -->
                    <div class="table-responsive">
                   
                        <table class="table align-items-center table-flush test" >
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="nombre">#</th>
                                    <th scope="col" class="sort" data-sort="nombre">Titulo</th>
                                    <th scope="col" class="sort" data-sort="apellido">Fecha</th>
                                    <th scope="col" class="sort" data-sort="género">descripcion</th>
                                    <th scope="col" class="sort" data-sort="acciones">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($eventos as $item)
                                <tr>
                                    <td>
                                        <span class="text-muted"></span>
                                    </td>
                                   
                                    <td>
                                        <span class="text-muted">{{$item->titulo}}</span>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{$item->descripcion}}</span>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{$item->fecha}}</span>
                                    </td>
                                    {{-- <td>
                                        <span class="text-muted">{{$item->class}}</span>
                                    </td> --}}
                                 
                                    <td class="table-actions">
                                       
                                        <a href="{{route('editarevento',$item->id)}}" class="table-action" data-original-title="Editar novedad">
                                            <i class="fas fa-user-edit"></i>
                                       
                                                <a href="#" class="table-action table-action-delete" data-toggle="modal" data-target="#deleteUsuario{{$item->id}}" data-original-title="Eliminar usuario">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                    <div class="col-md-4">
                        
                                            <div class="modal fade" id="deleteUsuario{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                              <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-body p-0">
                                                    <div class="card bg-secondary border-0 mb-0">
                                        
                                                      <div class="card-body px-lg-5 py-lg-5">
                                                        <div class="text-center text-muted mb-4">
                                                          <h3>Eliminar el evento</h3>
                                                        </div>
                                                        <form role="form" method="POST" action="{{route('eliminarevento',$item->id)}}" >
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
                        @if (session('eliminarusuario'))
                        <div class="alert alert-success" role="alert">
                        {{session('eliminarusuario')}} 
                        </div>
                     @endif
                    </div>
                    {{-- <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                {{$eventos->links()}}
                            </ul>
                        </nav>
                    </div> --}}
                </div>
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

