@extends('admin.layout')


@section('content')
<?php
$date =date('m-d')
?>
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
                          @foreach ($noticias as $item)
                            <li data-target="#carouselExampleControls" data-slide-to="{{$loop->index}}" class="{{$loop->first ? 'active' : ''}}"><li>
                          @endforeach
                        </ol>
                        <div class="carousel-inner">
                          @foreach ($noticias as $item)
                          <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                            <img src="{{ $item->image }}" class=" img-fluid d-block" alt="" style="margin-left: auto; margin-right: auto; width: 450px; height:350px ;min-width: 474px;">
                            <div class="carousel-caption d-none d-md-block">
                              <h5 class="h3 mb-0">{{$item->title }}</h5>
                              <a href="{{'post'}}/{{ $item->slug }}" class="btn btn-link px-0 ">Ver noticia</a>
                            </div>
                          </div>

                          @endforeach
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
            </div>
          </div>

        </div>
            <div class="card mb-6" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="..." class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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
                  <img alt="Image placeholder" src="{{$user->photo}}">
                </a>
              </div>
              <div class="col ml--2">
                <h4 class="mb-0">
                <a>{{$user->name}} {{$user->lastname}} <a class="gris">{{App\Helpers\Helpers::formatearFecha($user->cumpleanios)}}</a></a>
                </h4>
              </div>
            </div>
            {{-- Modal feliz cumpleaños --}}
            @if (App\Helpers\Helpers::modal(Auth::User()->cumpleanios) == $date)
            <div class="col-lg-10">
              <div class="modal fade" id="modal-notification" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered modal-" role="document">
                <div class="modal-content gif">
                    <div class="modal-header">
                     <span aria-hidden="true"></span>
                    </div>
                    <br><br><br><br><br><br><br>
                    <br><br><br><br><br><br><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">¡Gracias!</button>
                    </div>
                </div>
            </div>
            </div>
            </div>
            @endif
            {{-- fin modal feliz cumpleaños --}}

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
            <a class="gris">{{App\Helpers\Helpers::formatearFecha($evento->start_time)}}</a>
            <a class="gris"> hasta {{App\Helpers\Helpers::formatearFecha($evento->end_time)}}</a></a>
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

<script>
  $(document).ready(function()
  {
     $("#modaLlenarcampos").modal("show");
  });
</script>

@endsection
@endsection
