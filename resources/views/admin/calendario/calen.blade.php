@extends('admin.layouts.layout')
{{-- <link rel="stylesheet" href="{{asset("plantilla/css/date.css")}}" type="text/css"> --}}
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
               <a href="#" class="fullcalendar-btn-prev btn btn-sm btn-neutral">
                <i class="fas fa-angle-left"></i>
              </a>
              <a href="#" class="fullcalendar-btn-next btn btn-sm btn-neutral">
                <i class="fas fa-angle-right"></i>
              </a>
              <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="month">Mes</a>
              <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="basicWeek">Semana</a>
              <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="basicDay">Dia</a>
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
            <h5 class="h3 mb-0">Calendario</h5>
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
            @if (session('hora'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <span class="alert-icon"><i class="ni ni-fat-remove"></i></span>
              <span class="alert-text" data-toggle="notify" data-placement="top" data-align="center" data-type="danger" data-icon="ni ni-bell-55" ><strong></strong>{{session('hora')}}</span>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
            @endif
          </div>
          <!-- Card body -->        
          <div class="card-body p-0">
            <div class="calendar" id="eventos" data-toggle="calendar"></div>
          </div>       
        </div>
      </div>
    </div>
    @include('admin.modales.modalCampos')
    {{-- @include('admin.modales.modalPausas') --}}
    @include('admin.layouts.footer')
    </div>
  </div>
  @include('admin.calendario.crearev')

@section('js')
  
<script src="https://cdn.rawgit.com/jackmoore/colorbox/master/jquery.colorbox-min.js"></script>
<script src="{{asset("pausasacitvas/pausas.js")}}"></script>
</body>
<script src="{{asset("plantilla/vendor/fullcalendar/dist/locale/es.js")}}"></script>
<script>
var Fullcalendar = (function() {

// Variables

var $calendar = $('[data-toggle="calendar"]');

//
// Methods
//
var calendario={!! json_encode($calendario) !!};
// Init
function init($this) {

  var events =calendario,
  // Full calendar options
  // For more options read the official docs: https://fullcalendar.io/docs

  options = {
    header: {
      right: '',
      center: '',
      left: ''
    },
    buttonIcons: {
      prev: 'calendar--prev',
      next: 'calendar--next'
    },

    theme: false,
    selectable: false,
    selectHelper: true,
    editable: false,
    events: events,

    dayClick: function(date) {
      var isoDate = moment(date).toISOString();
      $('#new-event').modal('show');
      $('.new-event--title').val('');
      $('.new-event--start').val(isoDate);
      $('.new-event--end').val(isoDate);
    },

    viewRender: function(view) {
      var calendarDate = $this.fullCalendar('getDate');
      var calendarMonth = calendarDate.month();

      //Set data attribute for header. This is used to switch header images using css
      // $this.find('.fc-toolbar').attr('data-calendar-month', calendarMonth);

      //Set title in page header
      $('.fullcalendar-title').html(view.title);
    },

    // Edit calendar event action

    eventClick: function(event, element) {
      $('#edit-event input[value=' + event.className + ']').prop('checked', true);
      $('#edit-event').modal('show');
      $('.edit-event--id').val(event.id);
      $('.edit-event--title').val(event.title);
      $('.edit-event--description').val(event.description);
    }
  };

  // Initalize the calendar plugin
  $this.fullCalendar(options);


  //
  // Calendar actions
  //
  //Add new Event

  $('body').on('click', '.new-event--add', function() {
    var eventTitle = $('.new-event--title').val();

    // Generate ID
    var GenRandom = {
      Stored: [],
      Job: function() {
        var newId = Date.now().toString().substr(6); // or use any method that you want to achieve this string

        if (!this.Check(newId)) {
          this.Stored.push(newId);
          return newId;
        }
        return this.Job();
      },
      Check: function(id) {
        for (var i = 0; i < this.Stored.length; i++) {
          if (this.Stored[i] == id) return true;
        }
        return false;
      }
    };

    if (eventTitle != '') {
      $this.fullCalendar('renderEvent', {
        id: GenRandom.Job(),
        title: eventTitle,
        start: $('.new-event--start').val(),
        end: $('.new-event--end').val(),
        allDay: true,
        className: $('.event-tag input:checked').val()
      }, true);

      $('.new-event--form')[0].reset();
      $('.new-event--title').closest('.form-group').removeClass('has-danger');
      $('#new-event').modal('hide');
    } else {
      $('.new-event--title').closest('.form-group').addClass('has-danger');
      $('.new-event--title').focus();
    }
  });

  //Calendar views switch
  $('body').on('click', '[data-calendar-view]', function(e) {
    e.preventDefault();

    $('[data-calendar-view]').removeClass('active');
    $(this).addClass('active');

    var calendarView = $(this).attr('data-calendar-view');
    $this.fullCalendar('changeView', calendarView);
  });


  //Calendar Next
  $('body').on('click', '.fullcalendar-btn-next', function(e) {
    e.preventDefault();
    $this.fullCalendar('next');
  });


  //Calendar Prev
  $('body').on('click', '.fullcalendar-btn-prev', function(e) {
    e.preventDefault();
    $this.fullCalendar('prev');
  });
}


//
// Events
//

// Init
if ($calendar.length) {
  init($calendar);
}

})();
</script>
@endsection
@endsection