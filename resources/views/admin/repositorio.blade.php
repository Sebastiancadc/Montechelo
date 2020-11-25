
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
                                <h3 class="mb-0">Gestión de Archivos</h3>
                            </div>
                            
                            <div class="col-6 text-right">
                                <a href="#" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="modal" data-target="#modal-form" data-original-title="Añadir usuario">
                                    <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                                    <span class="btn-inner--text">Crear archivo</span>
                                </a>
                               
                            </div>                     
<br><br>                          
                        </div>
                  @if (session('eliminarrepositorio'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text" data-toggle="notify" data-placement="top" data-align="center" data-type="danger" data-icon="ni ni-bell-55" ><strong></strong>{{session('eliminarrepositorio')}}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                  @if (session('updaterepositorio'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <span class="alert-icon"><i class="ni ni-like-2"></i></span>
              <span class="alert-text" data-toggle="notify" data-placement="top" data-align="center" data-type="success" data-icon="ni ni-bell-55" ><strong></strong>{{session('updaterepositorio')}}</span>
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
                                    <th scope="col" class="sort" >Tipo archivo</th>
                                    <th scope="col" class="sort" >Autor</th>
                                    <th scope="col" class="sort" >Observaciones</th>
                                    <th scope="col" class="sort" >Imagen</th>
                                    
                                    <th scope="col" class="sort" data-sort="acciones">Acciones</th>
                                
                            </thead>
                            <tbody>


                                @foreach ($repositorio as $item)
                                <tr>
                                    <td>
                                        <span class="text-muted"></span>
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
                                       <a href="#" data-toggle="modal" data-target="#ver{{$item->Id_Repositorio}}" > <img src="{{$item->image}}"  width="50" height="50" class="img-fluid" ></a>
                            
                                    </a>
                                    </td>


                                    <td class="table-actions">
                                        
                                       
                                        <a href="{{route('editrepositorio',$item->Id_Repositorio)}}" class="table-action" data-original-title="Editar usuario">
                                            <i class="fas fa-user-edit"></i>
                                            
                                        </a>

                                        
                                        <a href="#" class="table-action table-action-delete" data-toggle="modal" data-target="#eliminarrepositorio{{$item->Id_Repositorio}}" data-original-title="Eliminar usuario">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    <div class="col-md-4">
                        
                                            <div class="modal fade" id="eliminarrepositorio{{$item->Id_Repositorio}}"  tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                              <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-body p-0">
                                                    <div class="card bg-secondary border-0 mb-0">
                                        
                                                      <div class="card-body px-lg-5 py-lg-5">
                                                        <div class="text-center text-muted mb-4">
                                                          <h3>Eliminar archivo</h3>
                                                        </div>
                                                        <form role="form" method="POST" action="{{route('eliminarrepositorio',$item->Id_Repositorio)}}">
                                                            @csrf @method('DELETE') 
                                        
                                                          <div class="text-center">
                                                            <button type="submit" class="btn btn-primary my-4" >Eliminar</button>
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
                                          <div class="col-md-4">
                                            <div class="modal fade" id="ver{{$item->Id_Repositorio}}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                          <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                              <div class="modal-content">
                                                  
                                                  <div class="modal-header">
                                                      <h6 class="modal-title" id="modal-title-default">Tipo documento</h6>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">×</span>
                                                      </button>
                                                  </div>
                                                  
                                                  <div class="modal-body">
                                                      
                                                      
                                                      <div class="text-center">
                                                        <img src="{{$item->image}}" width="1000" height="1000" class="img-fluid">
                                                      <div>
                                                  </div>
                                                  


                                                  
                                                  <div class="modal-footer">
                                                      <a href="{{$item->image}}" download target="_blank"> Descargar</a>
                                                      <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                                                  </div>
                                                  
                                              </div>
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
        @include('admin.repositorio.create')
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

    
{{-- Modal llenar campos --}}
@if (Auth::User()->phone == '')
<div class="col-lg-10">
  <div class="modal fade" id="modaLlenarcampos" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modal-dialog-centered modal-" role="document">
    <div class="modal-content ">       
        <div class="modal-header">
         <span aria-hidden="true"></span>
        </div>
        <div class="modal-body"> 
         <p>Por favor termine el registro para poder ingresar</p>                      
     </div>
        <div class="modal-footer">
           <a href="{{ url('perfil')}}" class="btn btn-white">¡Vamos!</a>
         </div>   
       </div>
</div>
</div>
</div>
@endif
{{-- fin modal llenar campos --}}
@section('js')

    <script>
        $(document).ready(function()
        {
           $("#modaLlenarcampos").modal("show");
        });
      </script> 
    <script src="https://cdn.rawgit.com/jackmoore/colorbox/master/jquery.colorbox-min.js"></script>
<script>
setTimeout(function(){
$.colorbox({
html:"<video width='750' height='540' autoplay controls> <source src="+ videoaleatoire()+" type='video/mp4'> </video>",
clasName: 'cboxWrapper',
width: 750,
height: 550
});
}, 3000);
</script>
<script>
  function makeArray(n) {
  this.length = n;
  for (var i=1; i<=n; i++) {
  this[i] = "";
  }
  return this;
  }
  var i;
  function videoaleatoire() {
  i = Math.floor(6 * Math.random() + 1);
  return video[i];
  }
  video = new makeArray(6);
  video[1]="pausasacitvas/PausaA.mp4";
  video[2]="pausasacitvas/PausaA2.mp4";
  video[3]="pausasacitvas/PausaA3.mp4";
  video[4]="pausasacitvas/PausaA4.mp4";
  video[5]="pausasacitvas/PausaA5.mp4";
  video[6]="pausasacitvas/PausaA6.mp4";
  </script>
</body>
<style>

  #cboxContent {
      background: black;
      /* overflow: hidden; */
  }
  .cboxWrapper{
    overflow: visible;
  }
  #cboxClose {
    margin-top: 5px;
    -ms-user-select: none;
    color: #f8f9fe;
    border: 1px solid #5e72e4;
    border-radius: .25rem;
    background-color: #5e72e4;
    height: 31px;
    width: 70px;    
}
</style>
@endsection