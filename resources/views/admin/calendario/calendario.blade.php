@extends('admin.layout')
@section('content')
    <style>
  .header-col{
        background:#ffffff;
        border: 1px solid #eff1f3;
        text-align: left;
        font-size: .75rem;
        font-weight: 600;
        padding: .75rem 1rem;
        text-transform: uppercase;
        color: #8898aa;

    }
    .box-day{
    border:1px solid #eff1f3;
    height:121px;
    border-style: solid;
    border-width: 1px;
    font-size: .875rem;
    font-weight: 600;
    color: #67779d;
    float: right;
    
    }
    .box-dayoff{
      border:1px solid #eff1f3;
      height:121px;
      background-color:#f2f5f3;
    }

    .eventoVerde{
    font-weight: 600;
    display: block;
    overflow: hidden;
    padding: .4rem .5rem;
    white-space: nowrap;
    text-overflow: ellipsis;
    color: #fff;
    background-color: #2dce89 !important;
    margin-top: 2p;
    margin: -7px -9px;
    font-size: .75rem;
    border: 0;
    border-radius: .25rem;
    }
    .eventoAmarillo{
    font-weight: 600;
    display: block;
    overflow: hidden;
    padding: .4rem .5rem;
    white-space: nowrap;
    text-overflow: ellipsis;
    color: #fff;
    background-color: #fb6340 !important;
    margin-top: 2p;
    margin: -7px -9px;
    font-size: .75rem;
    border: 0;
    border-radius: .25rem;
    }
    .eventoAzul{
    font-weight: 600;
    display: block;
    overflow: hidden;
    padding: .4rem .5rem;
    white-space: nowrap;
    text-overflow: ellipsis;
    color: #fff;
    background-color: #11cdef !important;
    margin-top: 2p;
    margin: -7px -9px;
    font-size: .75rem;
    border: 0;
    border-radius: .25rem;
    }
    </style>

  </head>
  <div class="header header-dark bg-primary pb-6 content__title content__title--calendar">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6">
            <h6 class="fullcalendar-title h2 text-white d-inline-block mb-0">Calendario</h6>
            <nav aria-label="breadcrumb" class="d-none d-lg-inline-block ml-lg-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Calendar</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 mt-3 mt-lg-0 text-lg-right">
            <a href="#" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#modal-form" data-original-title="Añadir usuario">
               
                <span class="btn-inner--text">Crear evento</span>
                <a class="btn btn-sm btn-neutral"  href="{{ asset('/Evento/index')}}">Hoy</a>
                <a  href="{{ asset('/Evento/index') }}/<?= $data['last']; ?>" class="fullcalendar-btn-next btn btn-sm btn-neutral">
                  <i class="fas fa-angle-left"> </i>
                </a>
              
                <a  href="{{ asset('/Evento/index') }}/<?= $data['next']; ?>" class="fullcalendar-btn-next btn btn-sm btn-neutral"> 
                  <i class="fas fa-angle-right"></i>
                </a>
            </a>
            @include('admin.calendario.eve')
          </div>
        </div>
      </div>
    </div>
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
            <h5 class="h3 mb-0">Calendario</h5>
            <h1 class="h2 mb-0" style="margin-top: -25px;margin-left: 41%"><?= $mespanish;?><small class="h2 mb-0">   <?= $data['year']; ?></small></h1><?php echo date("D-d");?> 
        </div>
          <!-- Card body -->
          <div class="card-body p-0">
            <div class="container">
                <div class="row header-calendar">
                </div>
                <div class="row">
                  <div class="col header-col">Lunes</div>
                    <div class="col header-col">Martes</div>
                    <div class="col header-col">Miercoles</div>
                  
                    <div class="col header-col">Jueves</div>
                  <div class="col header-col">Viernes</div>
                  <div class="col header-col">Sabado</div>
                  <div class="col header-col">Domingo</div>
                </div>
                <!-- inicio de semana -->
                @foreach ($data['calendar'] as $weekdata)
                  <div class="row">
                    <!-- ciclo de dia por semana -->
                    @foreach  ($weekdata['datos'] as $dayweek)
          
                    @if  ($dayweek['mes']==$mes)
                    
                      <div class="col box-day">

                        {{ $dayweek['dia']}}
                        <!-- evento -->
                        @foreach  ($dayweek['evento'] as $event) 
                        <br><br>
                            <a class="{{$event->class}}" href="{{ asset('/Evento/details/') }}/{{ $event->id }}">
                              {{ $event->titulo }}
                            </a>
                        @endforeach
                      </div>
                    @else
                    <div class="col box-dayoff">
                        
                    </div>
                    @endif
                    @endforeach
                  </div>
                @endforeach
          </div>
        </div>
      </div>
    </div>
</div>

    <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center text-lg-left text-muted">
              &copy; <?php echo date("Y");?> <a href="" class="font-weight-bold ml-1" target="">Grupo 3.</a>
            </div>
          </div>
  
        </div>
      </footer>
    </div>
  </div>
  @endsection