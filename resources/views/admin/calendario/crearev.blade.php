<!-- Modal -->
<?php
$user = auth()->user();
?>
<link rel="stylesheet" href="{{asset("plantilla/css/date.css")}}" type="text/css">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <form role="form" method="POST" action="{{url('Calendario/crearEvento')}}">
          @csrf @method('POST')
          <input value="{{Auth::user()->id}}" name="Usuario_id_Usuario" hidden>
          <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-world-2"></i></span>
              </div>
              <input class="form-control" placeholder="Titulo" name="name" type="text" maxlength="21" >
            </div>
            @if ($errors->has('name'))
            <strong class="text-danger tamano">{{ $errors->first('name') }}</strong>
            @endif
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <h3>Fecha inicial</h3>
                <div class='input-group date' id='datetime1'>
                  <input type='text' class="form-control" name="start_time">
                  <span class="input-group-addon input-group-append">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2"> <span class="fa fa-calendar"></span></button>
                  </span>
                </div>
                @if ($errors->has('start_time'))
                <strong class="text-danger tamano">{{ $errors->first('start_time') }}</strong>
                @endif
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <h3>Fecha final</h3>
                <div class='input-group date' id='datetimepicker12'>
                  <input type='text' class="form-control" name="end_time">
                  <span class="input-group-addon input-group-append">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2"> <span class="fa fa-calendar"></span></button>
                  </span>
                </div>
                @if ($errors->has('end_time'))
                <strong class="text-danger tamano">{{ $errors->first('end_time') }}</strong>
                @endif
              </div>
            </div>
          </div>
          <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
              <select class="form-control" id="exampleFormControlSelect1" name="className" id="class" >
                <option> </option>
                <option class="myRed" value="Importante">Importante</option>
                <option class="myblue" value="Especial">Especial</option>
                <option class="mygreen" value="Advertencia">Advertencia</option>
              </select>
            </div>
            @if ($errors->has('className'))
            <strong class="text-danger tamano">{{ $errors->first('className') }}</strong>
            @endif
          </div>
          <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
              <textarea class="form-control" placeholder="Descripcion del evento" name="description" type="text" cols="10" rows="5" maxlength="201" ></textarea>
            </div>
            @if ($errors->has('description'))
            <strong class="text-danger tamano">{{ $errors->first('description') }}</strong>
            @endif
          </div>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary my-4">Crear</button>
        <button class="btn btn-danger ml-auto" data-dismiss="modal">Cancelar</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
<script src="{{asset("plantilla/vendor/jquery/dist/jquery.min.js")}}"></script>

<script src="{{asset("plantilla/vendor/moment/min/moment.min.js")}}"></script>
<script type="text/javascript">
  $(function() {
    $('#datetime1').datetimepicker({
      format: 'Y/M/D hh:mm',
      icons: {
        time: "fa fa-clock",
        date: "fa fa-calendar-day",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
      }
    });
  });
</script>
<script>
  $(function() {
    $('#datetimepicker12').datetimepicker({
      format: 'Y/M/D hh:mm',
      icons: {
        time: "fa fa-clock",
        date: "fa fa-calendar-day",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
      }
    });
  });
</script>