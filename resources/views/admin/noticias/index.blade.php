

@extends('admin.layout')
@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Noticias</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Administrador</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Noticias</li>
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
                    <div class="card-header border-5">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="mb-0">Gestión de Noticias</h3>
                            </div>
                            {{--  <div class="col-6 text-right">
                                <a href="" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="modal" data-target="#modal-form" data-original-title="Agregar noticia">
                                    <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                                    <span class="btn-inner--text">Publicar</span>
                                </a>
                            </div>
                            @include('admin.noticias.create')  --}}
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

                        <table class="table align-items-center table-flush test" >
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
                                                        <form role="form" method="POST" action="{{route('eliminarnoticia',$item->Id_noticia)}}" >
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

