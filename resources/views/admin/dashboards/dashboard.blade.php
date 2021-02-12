@extends('admin.layouts.layout')
@section('content')
<?php
$date =date('m-d');
$fechahoy = new \DateTime();
$fechas = $fechahoy->format('d-m-Y');
?>

<div class="header bg-primary pb-6" >
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">{{__('Inicio')}}</a></li>
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
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="mb-0">{{__('Noticias de Intéres')}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col sm-4">
                                <div class="bd-example">
                                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                          @foreach ($noticias as $item)
                                          @if(App\Helpers\Helpers::formatearFechahoy($item->fecha) == $fechas)
                                            <div class="carousel-item {{$loop->first ? 'active': ''}}" data-interval="5000">
                                                <img src="{{$item->image}}" class="d-block w-100 image-responsive imges" alt="...">
                                                <div class="carousel-caption d-none d-md-block ">
                                                 
                                                  <a  href="{{'post'}}/{{ $item->slug }}">  
                                                    <h5 class="aso">{{$item->title}}</h5>
                                                    <p class="aso">{{__('Escrito por')}} {{$item->user->name}} {{$item->user->lastname}}</p>
                                                  </a>
                                                </div>
                                                </div>
                                            
                                          @endif
                                          @endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        </a>
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
                        <h5 class="h3 mb-0">{{(__('Próximos cumpleaños'))}}</h5>
                    </div>
                </div>
          </div>
          <div class="card-body">
           @foreach ($users as $user)
            <div class="row align-items-center">
              <div class="col-auto">
                <a class="avatar rounded-circle">
                <img src="{{$user->photo}}">
                </a>
              </div>
              <div class="col ml--2">
                <h4 class="mb-0">
                <a>{{$user->name}} {{$user->lastname}} <a class="gris">{{App\Helpers\Helpers::formatearFecha($user->cumpleanios)}}</a></a>
                </h4>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        {{-- Modal feliz cumpleaños --}}
        @include('admin.modales.cumpleanios')
        {{-- Modal llenar campos --}}
        @include('admin.modales.modalCampos')
        {{-- Modal pausas activas --}}
        @include('admin.modales.modalPausas')
        @include('admin.modales.anuncios')
        <!-- Timeline card -->
        <div class="card widget-calendar">
          <!-- Card header -->
                    <div class="card-header">
            <!-- Title -->
            <h5 class="h3 mb-0">{{__('Próximos eventos')}}</h5>
             <h5>
          </h5>
          </div>

          {{-- <div class="card-header">
                <div class="h3 mb-0 widget-calendar-day"></div>
                <div class="h3 text-muted mb-1 widget-calendar-year"></div>
          </div> --}}
          <!-- Card body -->
          <div class="card-body">
            {{-- <div class="calendar" id="sad" data-toggle="widget-calendar" style="visibility: hidden;"></div> --}}
            <div data-toggle="calendar" id="date"  ></div>
          </div>
          @foreach ($eventos as $evento)
          <div class="etnrr">
            <h4>
              <br>
            <a style="margin-left:31px;">{{$evento->name}}
            <a class="gris">{{App\Helpers\Helpers::formatearFecha($evento->start_time)}}</a>
            <a class="gris"> {{__('hasta')}} {{App\Helpers\Helpers::formatearFecha($evento->end_time)}}</a></a>
          <br>
            </h4>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    @include('admin.layouts.footer')
  </div>
</div>

@section('js')
<script src="{{asset("plantilla/vendor/fullcalendar/dist/locale-all.js")}}"></script>
<script>
  $(document).ready(function () {
          events={!! json_encode($calendario) !!};
          $('#date').fullCalendar({
              events: events,
              locale: '{{$locales= app()->getLocale()}}',

          })
      });
</script>
<style> 
  .imges:hover {
    opacity: 0.75;
    
}

.aso:hover {
  color: #07d544;
  cursor: pointer;
}
</style>
<script src="https://cdn.rawgit.com/jackmoore/colorbox/master/jquery.colorbox-min.js"></script>
<script src="{{asset("pausasacitvas/pausas.js")}}"></script>
</body>
@endsection
@endsection
