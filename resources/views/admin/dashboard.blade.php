@extends('admin.layout')


@section('content')
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
                <h2 class="text-uppercase ls-1 mb-1" style="color: #32325d;">Noticias de interes</h2>

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


            {{-- @foreach ($users as $user)
            <div class="row align-items-center">
              <div class="col-auto">
               
                <a class="avatar rounded-circle">
                  <img alt="Image placeholder" src="{{asset("plantilla/img/theme/team-1.jpg")}}">
                </a>
              </div>
              <div class="col ml--2">
                <h4 class="mb-0">  
                <a>{{$user->name." ". App\Helpers\Helpers::formatearFecha($user->cumpleaños)}}</a>x 
                </h4>
              </div>
            </div>  
            @endforeach --}}
          </div>
        </div>

        <!-- Timeline card -->

        <div class="card widget-calendar">
          <!-- Card header -->
          <div class="card-header">
            <!-- Title -->
            <h5 class="h3 mb-0">Proximos eventos</h5>
             <h5><?php
   
              ?>   
          </h5>
          </div>
          <div class="card-header">
            <div class="h3 mb-0 widget-calendar-day"></div>
            <div class="h3 text-muted mb-1 widget-calendar-year"></div>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <div data-toggle="widget-calendar"></div>
          </div>
          <div style="height: 125px;">
            <br>
            <p style="margin-left: 54px;">Reunion 25 octubre</p>
            <p style="margin-left: 54px;">Capacitacion 27 octubre</p>

          </div>

        </div>
        <!-- Progress track -->

        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <!-- Title -->
            <h5 class="h3 mb-0">Amigos en linea </h5>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <!-- List group -->
            <ul class="list-group list-group-flush list my--3">
              <li class="list-group-item px-0">
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
              </li>
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#" class="avatar rounded-circle">
                      <img alt="Image placeholder" src="{{asset("plantilla/img/theme/team-2.jpg")}}">
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
              </li>
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#" class="avatar rounded-circle">
                      <img alt="Image placeholder" src="{{asset("plantilla/img/theme/team-3.jpg")}}">
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
              </li>
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#" class="avatar rounded-circle">
                      <img alt="Image placeholder" src="{{asset("plantilla/img/theme/team-4.jpg")}}">
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
              </li>
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

<script>
  $(document).ready(function () {
     
          $('#calendarioEvent').fullCalendar({
         
          header: {
          left: 'prev,next',
          center: 'title',
          right: 'month,agendaWeek,agendaDay' 
      },
          events: events,
          })
  });
</script>
@endsection