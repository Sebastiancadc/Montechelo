

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
        <div class="row">
            <div class="col"style="padding:15px  200px !important">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="mb-0">Gestión de Sugerencias</h3>
                            </div>

                        </div>
                    </div>

                    <!-- Light table -->
                    <div class="table-responsive">

                        <table class="table align-items-center table-flush test" >
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="nombre">#</th>
                                    <th scope="col" class="sort" data-sort="nombre">Tipo de sugerencia</th>
                                    <th scope="col" class="sort" data-sort="apellido">Descripcion</th>
                                    <th scope="col" class="sort" data-sort="género">Area</th>



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
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if (session('eliminarsugerencia'))
                        <div class="alert alert-success" role="alert">
                        {{session('eliminarsugerencia')}}
                        </div>
                     @endif
                    </div>
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                {{$buzon->links()}}
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

