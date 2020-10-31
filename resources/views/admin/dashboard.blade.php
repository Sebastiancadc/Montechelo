@extends('admin.layout')


@section('content')

<div class="col-md-4">
  <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
<div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
    <div class="modal-content bg-gradient-danger">      
        <div class="modal-header">
            <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>      
        <div class="modal-body">         
            <div class="py-3 text-center">
                <i class="ni ni-bell-55 ni-3x"></i>
                <h4 class="heading mt-4">You should read this!</h4>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>   
        </div> 
        <div class="modal-footer">
            <button type="button" class="btn btn-white">Ok, Got it</button>
            <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
        </div>   
    </div>
</div>
</div>
</div>
<div class="header bg-primary pb-6" >

    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">

            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>

              </ol>
            </nav>
          </div>

        </div>
        <!-- Card stats -->
        <div class="row">
          <div class="col-xl-3 col-md-6">

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-lg-8">


        <div class="card bg-default" style="background-color: #ffffff !important;">
          <div class="card-header bg-transparent">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="text-uppercase ls-1 mb-1;">Noticias de interes</h2>

              </div>
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header bg-transparent">
                    <div class="bd-example">
                      <div id="carouselExampleCaptionss" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptionss" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptionss" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptionss" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src=" {{asset("plantilla/img/theme/img-1-1000x600.jpg")}}" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>First slide label</h5>
                              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src=" {{asset("plantilla/img/theme/img-1-1000x600.jpg")}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Second slide label</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src=" {{asset("plantilla/img/theme/img-1-1000x600.jpg")}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Third slide label</h5>
                              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptionss" role="button"
                          data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptionss" role="button"
                          data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="">
                    <div class="bd-example">
                      <div id="carouselExampleCaptions2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions2" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions2" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions2" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src=" {{asset("plantilla/img/theme/img-1-1000x600.jpg")}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>First slide label</h5>
                              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src=" {{asset("plantilla/img/theme/img-1-1000x600.jpg")}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Second slide label</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src=" {{asset("plantilla/img/theme/img-1-1000x600.jpg")}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Third slide label</h5>
                              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions2" role="button"
                          data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions2" role="button"
                          data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="">
                    <div class="bd-example">
                      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src=" {{asset("plantilla/img/theme/img-1-1000x600.jpg")}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">

                              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src=" {{asset("plantilla/img/theme/img-1-1000x600.jpg")}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Second slide label</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset("plantilla/img/theme/img-1-1000x600.jpg")}}" class="d-block w-100" alt="...">

                            <div class="carousel-caption d-none d-md-block">
                              <h5>Third slide label</h5>
                              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>



      </div>
      <div class="col-lg-4">


        <div class="card">
          <div class="card-header bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="h3 mb-0">Proximos cumpleaños</h5>
                    </div>
                </div>
          </div>
          <div class="card-body">
          
           @foreach ($users as $user)
            <div class="row align-items-center">
              <div class="col-auto">

                <a class="avatar rounded-circle">
                  <img alt="Image placeholder" src="{{asset("plantilla/img/theme/team-1.jpg")}}">
                </a>
              </div>
              <div class="col ml--2">
                <h4 class="mb-0">
                <a>{{$user->name}}  <a style="color: #8898aa !important;">{{App\Helpers\Helpers::formatearFecha($user->cumpleanios)}}</a></a>
                </h4>
               
              </div>
            </div>
            @endforeach
          </div>
        </div>

        <!-- Timeline card -->

        <div class="card widget-calendar">
          <!-- Card header -->
          
          <div class="card-header">
            <!-- Title -->
            <h5 class="h3 mb-0">Proximos eventos</h5>
             <h5>
          </h5>
          </div>
          <div class="card-header">
                <div class="h3 mb-0 widget-calendar-day"></div>
                <div class="h3 text-muted mb-1 widget-calendar-year"></div>
          </div>
          <!-- Card body -->
          
          <div class="card-body">
            <div class="calendar" id="sad" data-toggle="widget-calendar" style="visibility: hidden;"></div>
            <div data-toggle="calendar" id="date" style="margin-top: -151%;" ></div>
            
          </div>
          @foreach ($eventos as $evento)
          <div style="padding: 0.25rem 0.5rem;
          border-bottom: 1px solid rgba(0, 0, 0, .05);">            
            <h4>
              <br>
            <a style="margin-left:31px;">{{$evento->name}} 
            <a style="color: #8898aa !important;">{{App\Helpers\Helpers::formatearFecha($evento->start_time)}}</a>    
            <a style="color: #8898aa !important;"> hasta {{App\Helpers\Helpers::formatearFecha($evento->end_time)}}</a></a>
          <br>
            </h4>
          </div>
          @endforeach
        </div>
        
        <!-- Progress track -->

        <div class="card">
          <!-- Card header -->
          <div class="card-header bg-transparent">
            <!-- Title -->
            <h5 class="h3 mb-0">Amigos en linea </h5>
          </div>
          <!-- Card body -->
          <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#" class="avatar rounded-circle">
                      <img alt="Image placeholder" src="{{asset("plantilla/img/theme/team-1.jpg")}}">
                    </a>
                  </div>
                  <div class="col ml--2">
                    <h4 class="mb-0">
                      <a>User</a>
                    </h4>
                    <span class="text-success">●</span>
                    <small>Online</small>
                  </div>

                </div>
            </ul>
          </div>

        </div>

      </div>

    </div>
    <footer class="footer pt-0">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6">
          <div class="copyright text-center text-lg-left text-muted">
            &copy; 2020 <a href="" class="font-weight-bold ml-1" target="_blank">Grupo 3.</a>
          </div>
        </div>
      </div>
    </footer>

  </div>
</div>
<style>
  .Especial{
      background-color: #2dce89 !important;
      }
  .Advertencia  {
      background-color: #fb6340 !important;
      }
  .Importante{
      background-color: #11cdef !important;
      }
  .eventoRojo{
     
      background-image: url('https://cdn.discordapp.com/attachments/750800996946411684/769336734517035048/ezgif.com-gif-maker_2.gif');
      }
      .black{
        color:#000000; 
      }
</style>
@section('js')
<script>
  $(document).ready(function () {
          events={!! json_encode($calendario) !!};
          $('#date').fullCalendar({
              events: events,
          })
      });
</script>

<script>
  $(document).ready(function()
  {
     $("#modal-notification").modal("show");
  });
</script>
@endsection
@endsection