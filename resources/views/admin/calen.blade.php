@extends('admin.layout')
<link rel="icon" href="{{asset("plantilla/img/theme/isotipo.png")}}" type="image/png">

@section('content')
  
<div class="header header-dark bg-primary pb-6 content__title content__title--calendar">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6">
            <h6 class="fullcalendar-title h2 text-white d-inline-block mb-0"></h6>
            <nav aria-label="breadcrumb" class="d-none d-lg-inline-block ml-lg-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Calendario</li>
              </ol>
            </nav>
          </div>
     
          <div class="col-lg-6 mt-3 mt-lg-0 text-lg-right">
            <button class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#exampleModal">
                Crear evento
               </button>
          </div>
        </div>
       
      </div>
    </div>
</a>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <!-- Fullcalendar -->
        <div class="card card-calendar">
          <!-- Card header -->
          <div class="card-header">
            <!-- Title -->
            <h5 class="h3 mb-0">Calendar</h5>
            <h2 class="fullcalendar-title h2 text-black d-inline-block mb-0" style="margin-left: 44%;margin-top: -28px;"></h2>
            @if (session('crearevento'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <span class="alert-icon"><i class="ni ni-like-2"></i></span>
              <span class="alert-text" data-toggle="notify" data-placement="top" data-align="center" data-type="success" data-icon="ni ni-bell-55" ><strong></strong>{{session('crearevento')}}</span>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          @endif
          @if (session('editarevento'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
            <span class="alert-text" data-toggle="notify" data-placement="top" data-align="center" data-type="success" data-icon="ni ni-bell-55" ><strong></strong>{{session('editarevento')}}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
            @if (session('seelimino'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <span class="alert-icon"><i class="ni ni-fat-remove"></i></span>
              <span class="alert-text" data-toggle="notify" data-placement="top" data-align="center" data-type="danger" data-icon="ni ni-bell-55" ><strong></strong>{{session('seelimino')}}</span>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
            @endif
          </div>
          <!-- Card body -->
          <div style="visibility: collapse;"><div class="calendar" data-toggle="calendar" ></div></div>
          <div class="card-body p-0">
            <div class="calendar" id="calendarioEvent"></div>
          </div>
        @include('admin.calendario.crear')
        </div>
  
      </div>
    </div>
    {{-- <footer class="footer pt-0">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6">
          <div class="copyright text-center text-lg-left text-muted">
            &copy; 2020 <a href="" class="font-weight-bold ml-1" target="">Grupo 3.</a>
          </div>
        </div>
      </div>
    </footer>  --}}
    </div>
  </div>
 

  <script src="{{asset("plantilla/vendor/jquery/dist/jquery.min.js")}}"></script>
  <script src="{{asset("plantilla/vendor/moment/min/moment.min.js")}}"></script>
  <script src="{{asset("plantilla/vendor/fullcalendar/dist/fullcalendar.min.js")}}"></script>
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


<script>
    $(document).ready(function () {
          calendario={!! json_encode($calendario) !!}
            $('#calendarioEvent').fullCalendar({
            events: calendario,
            defaultView:'month',
 
            })
    });
</script>


<script>

    $(function () {
    $.datepicker.setDefaults($.datepicker.regional["es"]);
    $("#datepicker").datepicker({
    firstDay: 1
    });
    });
</script>
@endsection