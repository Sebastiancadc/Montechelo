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
                            <h6 class="h2 text-white d-inline-block mb-0">Repositorio</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#">Administrador</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Novedades</li>
                                </ol>
                            </nav>
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
                                <h3 class="mb-0">Gestión de repositorio</h3>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="modal" data-target="#modal-form" data-original-title="Añadir usuario">
                                    <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                                   
                                    <span class="btn-inner--text">Crear</span>
                                   
                                </a>
                                @include('admin.repositorio.create')
                            </div>
                        </div>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive" id="listadoregistros">
                        <table class="table align-items-center table-flush test "id="tbllistado">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="área">#</th>
                                    <th scope="col" class="sort" data-sort="Tipo_archivo">Tipo de archivo</th>
                                    <th scope="col" clss="sort" data-sort="Autor">Autor</th>
                                    <th scope="col" class="sort" data-sort="Observaciones">Observaciones</th>
                                    <th scope="col" class="sort" data-sort="imagen">imagen</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($repositorio as $item)
                                <tr>
                                    <td class="table-user">
                                        <b></b>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{$item->tipo_archivo}}</span>
                                    </td>
                                    <td>
                                        <a class="font-weight-bold">{{$item->autor}}</a>
                                    </td>
                                    <td>
                                        <span class="text-muted">{{$item->observaciones}}</span>
                                    </td>

                                    <td>
                                        <span class="text-muted">{{$item->status}}</span>
                                    </td>
                                      <td>
                                       
                                        <img  height= "100px"  src="{{$item->imagen}}">{{$item->imagen}}
                                    </td>


                                    <td class="table-actions">
                                        <a href="{{route('editrepositorio',$item->Id_Repositorio)}}" class="table-action" data-original-title="editrepositorio">
                                            <i class="fas fa-user-edit"></i>


                                            <a href="#!" class="table-action table-action-delete" data-toggle="modal" data-target="#eliminarrepositorio{{$item->Id_Repositorio}}" data-original-title="Eliminar novedad">
                                                <i class="fas fa-trash"></i>
                                            </a>
    
                                        <div class="modal fade" id="eliminarrepositorio{{$item->Id_Repositorio}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                            <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                                              <div class="modal-content">
                                                <div class="modal-body p-0">
                                                  <div class="card bg-secondary border-0 mb-0">
                                      
                                                    <div class="card-body px-lg-5 py-lg-5">
                                                      <div class="text-center text-muted mb-4">
                                                        <h3>Eliminar el archivo</h3>
                                                      </div>
                                                      <form role="form" method="POST" action="{{route('eliminarrepositorio',$item->Id_Repositorio)}}" >
                                                          @csrf 
                                                          @method('DELETE') 
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
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                      
                    </div>
                    
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                
                           </ul>
                        </nav>
                    </div>
                    @if (session('eliminarrepos'))
                    <div class="alert alert-success mt-3">
                        {{session('eliminarrepos')}} 
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="scripts/repositorio.js"></script>
<?php 

ob_end_flush();
?>

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
