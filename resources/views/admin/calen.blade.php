@extends('admin.layout')


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
          {{-- <div><div class="calendar" id="calendarioEvent"  data-toggle="calendar" ></div></div> --}}
          <div class="calendar" id="eventos" data-toggle="calendar"></div>
          <div class="card-body p-0">
            {{-- <div class="calendar" id="calendarioEvent"></div> --}}
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


  //Update/Delete an Event
  $('body').on('click', '[data-calendar]', function() {
    var calendarAction = $(this).data('calendar');
    var currentId = $('.edit-event--id').val();
    var currentTitle = $('.edit-event--title').val();
    var currentDesc = $('.edit-event--description').val();
    var currentClass = $('#edit-event .event-tag input:checked').val();
    var currentEvent = $this.fullCalendar('clientEvents', currentId);

    //Update
    if (calendarAction === 'update') {
      if (currentTitle != '') {
        currentEvent[0].title = currentTitle;
        currentEvent[0].description = currentDesc;
        currentEvent[0].className = [currentClass];

        console.log(currentClass);
        $this.fullCalendar('updateEvent', currentEvent[0]);
        $('#edit-event').modal('hide');
      } else {
        $('.edit-event--title').closest('.form-group').addClass('has-error');
        $('.edit-event--title').focus();
      }
    }

    //Delete
    if (calendarAction === 'delete') {
      $('#edit-event').modal('hide');

      // Show confirm dialog
      setTimeout(function() {
        swal({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          buttonsStyling: false,
          confirmButtonClass: 'btn btn-danger',
          confirmButtonText: 'Yes, delete it!',
          cancelButtonClass: 'btn btn-secondary'
        }).then((result) => {
          if (result.value) {
            // Delete event
            $this.fullCalendar('removeEvents', currentId);

            // Show confirmation
            swal({
              title: 'Deleted!',
              text: 'The event has been deleted.',
              type: 'success',
              buttonsStyling: false,
              confirmButtonClass: 'btn btn-primary'
            });
          }
        })
      }, 200);
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