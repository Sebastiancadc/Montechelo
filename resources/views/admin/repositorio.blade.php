@extends('admin.layout')
@section('content')
  
<div class=" bg-gradient-info3  pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">

            </nav>
          </div>

        </div>
        <!-- Card stats -->

        <div class="">
          <div class="card-body"></div>
          <div class="row">
            <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30" style="
                margin-top: -88px;
            ">
              <h4 class="tx-gray-800 mg-b-5">Gestor de archivos</h4>
              <p class="mg-b-0">Este es el administrador de archivos.</p>
            </div>
          </div>
        </div>

      </div>
      <div class="btn-group hidden-xs-down">
        <a href="#" class="btn btn-outline-info " style="
    margin-left: 174px;
">Compartir</a>
        <a href="#" class="btn btn-outline-info">Descargar</a>
      </div><!-- btn-group -->
      <div class="btn-group  hidden-xs-down">
        <a href="#" class="btn btn-outline-info">Archivar documento</a>
      </div>
      <div class="dropdown hidden-sm-up">
        <div class="dropdown-menu pd-10">
          <nav class="nav nav-style-1 flex-column">
            <a href="" class="nav-link ">Compartir</a>
            <a href="" class="nav-link">Descargar</a>
            <div class="dropdown-divider"></div>
            <a href="" class="nav-link">Editar</a>
            <a href="" class="nav-link">Eliminar</a>
          </nav>
        </div><!-- dropdown-menu -->
      </div><!-- dropdown -->
      <!-- END: DISPLAYED FOR MOBILE ONLY -->

      <!-- btn-group -->
      <br>
      <div class="btn-group mg-l-auto hidden-sm-down">
        <a href="#" class="btn btn-outline-info active" style="
      margin-left: 175px;
  ">Todos</a>
        <a href="#" class="btn btn-outline-info">Imagenes</a>
        <a href="#" class="btn btn-outline-info">Videos</a>
        <a href="#" class="btn btn-outline-info">Documentos</a>
        <a href="#" class="btn btn-outline-info">Audio</a>
      </div><!-- btn-group -->

      <!-- START: DISPLAYED FOR MOBILE ONLY -->
      <div class="dropdown mg-l-auto hidden-md-up">
        <a href="#" class="btn btn-outline-secondary " style="
      margin-top: 60px;
      margin-left: 283px;
  " data-toggle="dropdown">Todos <i class="fa fa-angle-down mg-l-5"></i></a>
        <div class="dropdown-menu dropdown-menu-right pd-10">
          <nav class="nav nav-style-1 flex-column">
            <a href="" class="nav-link">Todos</a>
            <a href="" class="nav-link">Imageness</a>
            <a href="" class="nav-link">Videos</a>
            <a href="" class="nav-link">Documentos</a>
            <a href="" class="nav-link">Audios</a>
          </nav>
        </div><!-- dropdown-menu -->
      </div>
      <div class="br-pagebody pd-x-20 pd-sm-x-30">
        <div class="card bd-0 shadow-base">
          <table class="table mg-b-0">
            <thead>
              <tr>
                <th class="wd-5p">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>

                </th>
                <th class="tx-10-force tx-mont tx-medium">Nombre</th>

                <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Modificar</th>
                <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Opciones</th>

                <th class="wd-5p"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="icon ion-ios-folder-outline tx-24 tx-warning lh-0 valign-middle"></i>
                  <span class="pd-l-5">Subidad de camara</span>
                </td>
                <td class="hidden-xs-down">---</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"
                    style="background-color: gray;"><i class="icon bold-down"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="" class="nav-link">Informacion</a>
                      <a href="" class="nav-link">Descargar</a>
                      <a href="" class="nav-link">Renombrar</a>
                      <a href="" class="nav-link">Mover</a>
                      <a href="" class="nav-link">Copiar</a>
                      <a href="" class="nav-link">Eliminar</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="icon ion-ios-folder-outline tx-24 tx-warning lh-0 valign-middle"></i>
                  <span class="pd-l-5">My Collections</span>
                </td>
                <td class="hidden-xs-down">---</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"
                    style="background-color: gray;"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="" class="nav-link">Información</a>
                      <a href="" class="nav-link">Desargar</a>
                      <a href="" class="nav-link">Renombrar</a>
                      <a href="" class="nav-link">Mover</a>
                      <a href="" class="nav-link">Copiar</a>
                      <a href="" class="nav-link">Eliminar</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="icon ion-ios-folder-outline tx-24 tx-warning lh-0 valign-middle"></i>
                  <span class="pd-l-5">E-Book</span>
                </td>
                <td class="hidden-xs-down">---</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"
                    style="background-color: gray;"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="" class="nav-link">Informacion</a>
                      <a href="" class="nav-link">Descarga</a>
                      <a href="" class="nav-link">Renombrar</a>
                      <a href="" class="nav-link">Mover</a>
                      <a href="" class="nav-link">Copiar</a>
                      <a href="" class="nav-link">Eliminar</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="fa fa-file-pdf-o tx-22 tx-danger lh-0 valign-middle"></i>
                  <span class="pd-l-5">MyResume.pdf</span>
                </td>
                <td class="hidden-xs-down">10/11/2017 7:22am</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"
                    style="background-color: gray;"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="" class="nav-link">Informacion</a>
                      <a href="" class="nav-link">Descarga</a>
                      <a href="" class="nav-link">Renombrar</a>
                      <a href="" class="nav-link">Mover</a>
                      <a href="" class="nav-link">Copiar</a>
                      <a href="" class="nav-link">Eliminar</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <img src="../img/img18.jpg" class="wd-20" alt="">
                  <span class="pd-l-5">23424343.jpg</span>
                </td>
                <td class="hidden-xs-down">10/11/2017 7:22am</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"
                    style="background-color: gray;"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="" class="nav-link">Info</a>
                      <a href="" class="nav-link">Download</a>
                      <a href="" class="nav-link">Rename</a>
                      <a href="" class="nav-link">Move</a>
                      <a href="" class="nav-link">Copy</a>
                      <a href="" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="icon ion-ios-folder-outline tx-24 tx-warning lh-0 valign-middle"></i>
                  <span class="pd-l-5">Illustrations</span>
                </td>
                <td class="hidden-xs-down">---</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"
                    style="background-color: gray;"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="" class="nav-link">Info</a>
                      <a href="" class="nav-link">Download</a>
                      <a href="" class="nav-link">Rename</a>
                      <a href="" class="nav-link">Move</a>
                      <a href="" class="nav-link">Copy</a>
                      <a href="" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="icon ion-ios-folder-outline tx-24 tx-warning lh-0 valign-middle"></i>
                  <span class="pd-l-5">Movies</span>
                </td>
                <td class="hidden-xs-down">---</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info "
                    style="background-color: gray;"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="" class="nav-link">Info</a>
                      <a href="" class="nav-link">Download</a>
                      <a href="" class="nav-link">Rename</a>
                      <a href="" class="nav-link">Move</a>
                      <a href="" class="nav-link">Copy</a>
                      <a href="" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="fa fa-file-audio-o tx-22 tx-primary lh-0 valign-middle"></i>
                  <span class="pd-l-5">InTheEnd.mp3</span>
                </td>
                <td class="hidden-xs-down">10/11/2017 3:20am</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"
                    style="background-color: gray;"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="" class="nav-link">Info</a>
                      <a href="" class="nav-link">Download</a>
                      <a href="" class="nav-link">Rename</a>
                      <a href="" class="nav-link">Move</a>
                      <a href="" class="nav-link">Copy</a>
                      <a href="" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="fa fa-file-audio-o tx-22 tx-primary lh-0 valign-middle"></i>
                  <span class="pd-l-5">Symphony.mp3</span>
                </td>
                <td class="hidden-xs-down">10/11/2017 5:51am</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"
                    style="background-color: gray;"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="" class="nav-link">Info</a>
                      <a href="" class="nav-link">Download</a>
                      <a href="" class="nav-link">Rename</a>
                      <a href="" class="nav-link">Move</a>
                      <a href="" class="nav-link">Copy</a>
                      <a href="" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="fa fa-file-audio-o tx-22 tx-primary lh-0 valign-middle"></i>
                  <span class="pd-l-5">Clarity.mp3</span>
                </td>
                <td class="hidden-xs-down">10/11/2017 8:22am</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"
                    style="background-color: gray;"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="" class="nav-link">Info</a>
                      <a href="" class="nav-link">Download</a>
                      <a href="" class="nav-link">Rename</a>
                      <a href="" class="nav-link">Move</a>
                      <a href="" class="nav-link">Copy</a>
                      <a href="" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- br-pagebody -->
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
@endsection