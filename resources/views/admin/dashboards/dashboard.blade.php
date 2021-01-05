@extends('admin.layouts.layout')
@section('content')
<?php
$date =date('m-d')
?>
<link rel="stylesheet" href="{{asset("plantilla/css/gallery.css")}}" type="text/css">
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
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="mb-0">Noticias de Intéres</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col sm-4">
                            @foreach ($noticias as $item)
                            <a href="{{'post'}}/{{ $item->slug }}">
                                <div class="gallery-item " data-width="1" data-height="1" style="padding-left: 10px; width: auto;">
                                    <img src="{{$item->image}}" alt="" class="image-responsive imgsss">
                                    <div class="overlayer bottom-left full-width"  style="margin-top: -127px;margin-left: 16px;">
                                    <div class="overlayer-wrapper item-info ">
                                            <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                                                <div class="">
                                                    <p class="pull-left bold text-white fs-14 p-t-10">{{$item->title}}</p>                                            
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="m-t-10">
                                                    <div class="thumbnail-wrapper d32 circular m-t-5 avatar rounded-circle">
                                                        <img src="{{ $item->user->photo }}">
                                                    </div>
                                                    <div class="inline m-l-10">
                                                        <p class="no-margin text-white fs-12">Escrito por {{$item->user->name}} {{$item->user->lastname}}</p>
                                                    </div>                                                
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                    </div>
                                    </div>

                                </div>
                            </a>
                            @endforeach
                        </div>
                        @foreach ($noticias2 as $noticia2)
                        <div class="col-md-8" style="margin-left: -20px;" >
                            <a href="{{'post'}}/{{ $noticia2->slug }}">
                                <div class="gallery-item " data-width="2" data-height="2" style="padding-left: 10px; width: auto">
                                    <!-- START PREVIEW -->
                                    <div class="live-tile slide" data-speed="750" data-delay="4000" data-mode="carousel">
                                        <div class="slide-front">
                                            <img src="{{$noticia2->image}}" class="image-responsive-height imgsss2">
                                        </div>
                                    </div>
                                    <!-- END PREVIEW -->
                                    <!-- START ITEM OVERLAY DESCRIPTION -->
                                    <div class="overlayer bottom-left full-width" style="margin-top: -185px;margin-left: 16px;">
                                    <div class="overlayer-wrapper item-info more-content">
                                        <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                                        <div class="">
                                            <h3 class="pull-left bold text-white no-margin">{{$noticia2->title}}</h3>                                        
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="m-t-10">
                                            <div class="thumbnail-wrapper d32 circular m-t-5  avatar rounded-circle">
                                            <img width="auto" height="auto" src="{{$noticia2->user->photo}}"  alt="">
                                            </div>
                                            <div class="inline m-l-10">
                                                <p class="no-margin text-white fs-12">Escrito por {{$noticia2->user->name}} {{$noticia2->user->lastname}}</p>                                      
                                            </div>                                            
                                            <div class="clearfix"></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- END PRODUCT OVERLAY DESCRIPTION -->
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>               
        </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header bg-transparent"> 
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="h3 mb-0">Próximos cumpleaños</h5>
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
            <h5 class="h3 mb-0">Próximos eventos</h5>
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
          <div class="etnrr">
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
      </div>
    </div>
    @include('admin.layouts.footer')
  </div>
</div>

@section('js')
<script src="{{asset("plantilla/vendor/fullcalendar/dist/locale/es.js")}}"></script>
<script>
  $(document).ready(function () {
          events={!! json_encode($calendario) !!};
          $('#date').fullCalendar({
              events: events,

          })
      });
</script>

<script src="https://cdn.rawgit.com/jackmoore/colorbox/master/jquery.colorbox-min.js"></script>
<script src="{{asset("pausasacitvas/pausas.js")}}"></script>
<script src="{{asset("plantilla/js/gallery.js")}}"></script>

</body>
@endsection
@endsection