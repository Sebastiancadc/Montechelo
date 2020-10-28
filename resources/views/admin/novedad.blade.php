@extends('admin.layout')

<link rel="stylesheet" href="{{asset("plantilla/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css")}}">
<link rel="stylesheet" href="{{asset("plantilla/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css")}}">
<link rel="stylesheet" href="{{asset("plantilla/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css")}}">
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
                            <h6 class="h2 text-white d-inline-block mb-0">Novedades</h6>
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
    <div class="row float-left">
        <div class="col-12">
            <h3 class="mb-0">Gestión de Novedades</h3>

        </div>
        <br>
        <div class="col-6 text-right">
            <a href="#" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="modal" data-target="#modal-form" data-original-title="Añadir usuario">
                <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>

                <span class="btn-inner--text">Crear</span>

            </a>
            @include('admin.novedad.create')
        </div>

        @if (session('eliminar'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <span class="alert-icon"><i class="ni ni-"></i></span>
          <span class="alert-text" data-toggle="notify" data-placement="top" data-align="center" data-type="danger" data-icon="ni ni-bell-55" ><strong></strong>{{session('eliminar')}}</span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      @endif
      @if (session('update'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <span class="alert-icon"><i class="ni ni-"></i></span>
          <span class="alert-text" data-toggle="notify" data-placement="top" data-align="center" data-type="danger" data-icon="ni ni-bell-55" ><strong></strong>{{session('update')}}</span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      @endif
        <br>

    </div>

</div>
                    <!-- Light table -->
                   


                    <div class="table-responsive py-4" style="margin-top: -41px;">
                        
                        <table class="table table-flush test" id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Área</th>
                                    <th>Fecha </th>
                                    <th>Novedad</th>
                                    <th>Descripción</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
   
                            </thead>
                            <tfoot>
                                
                                <th>#</th>
                                <th>Área</th>
                                <th>Fecha </th>
                                <th>Novedad</th>
                                <th>Descripción</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                                
                            </tfoot>
                            <tbody>
                                @foreach ($novedad as $item) 
                                
                            
                                    <td></td>
                                    <td>{{$item->area}}</td>
                                    <td>{{$item->fecha}}</td>
                                    <td>{{$item->novedad}}</td>
                                    <td>{{$item->descripcion}}</td>
                                    <td><span class="badge badge-lg badge-success">{{$item->estado}}</span></td> 
                                    
                                    <td><a href="{{route('editarnovedad',$item->id_novedad)}}" class="table-action" data-original-title="Editar novedad">
                                        <i class="fas fa-user-edit"></i>


                                    <a href="#!" class="table-action table-action-delete" data-toggle="modal" data-target="#deleteNovedad{{$item->id_novedad}}" data-original-title="Eliminar novedad">
                                        <i class="fas fa-trash"></i>
                                    </a></td> 
                                    <div class="modal fade" id="deleteNovedad{{$item->id_novedad}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                                          <div class="modal-content">
                                            <div class="modal-body p-0">
                                              <div class="card bg-secondary border-0 mb-0">

                                                <div class="card-body px-lg-5 py-lg-5">
                                                  <div class="text-center text-muted mb-4">
                                                    <h3>Eliminar la novedad</h3>
                                                  </div>
                                                  <form role="form" method="POST" action="{{route('eliminarnovedad',$item->id_novedad)}}" >
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
  




                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                {{$novedad->links()}}
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
</body>

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

{{-- BUSCADOR --}}
{{-- <script>


    $(document).ready(function() {
       $("#search").autocomplete({

           source: function(request, response) {
               $.ajax({
               url: "{{url('buscar')}}",
               data: {
                       term : request.term
                },
               dataType: "json",
               success: function(data){
                  var resp = $.map(data,function(obj){
                       return obj.name;
                  });

                  response(resp);
               }
           });
       },
       minLength: 1
    });
   });

   </script> --}}

@section('js')
<script src="{{asset("plantilla/vendor/datatables.net/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("plantilla/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("plantilla/vendor/datatables.net-buttons/js/dataTables.buttons.min.js")}}"></script>
<script src="{{asset("plantilla/vendor/datatables.net-buttons/js/buttons.html5.min.js")}}"></script>
<script src="{{asset("plantilla/vendor/datatables.net-buttons/js/buttons.flash.min.js")}}"></script>
<script src="{{asset("plantilla/vendor/datatables.net-buttons/js/buttons.print.min.js")}}"></script>
<script src="{{asset("plantilla/vendor/datatables.net-select/js/dataTables.select.min.js")}}"></script>
    
@endsection
@endsection
