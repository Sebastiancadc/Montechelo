
  <!-- Modal -->
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

                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-world-2"></i></span>
                        </div>
                        <input class="form-control" placeholder="Titulo" name="name" type="text">
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-md-7"> 
                        <div class="form-group row" >
                            <div class="col-md-10">
                              <input class="form-control" type="datetime-local" name="start_time" id="datepicker">
                            </div>
                          </div>
                </div>
                <div class="col-md-7"> 
                    <div class="form-group row">
                        <div class="col-md-10" style="margin-left:237px;margin-top: -70px;">
                          <input class="form-control" type="datetime-local"  name="end_time" id="example-datetime-local-input" >
                        </div>
                      </div>
            </div>
            </div>
            <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                    <select class="form-control" id="exampleFormControlSelect1" name="className" id="class">
                        <option>Tipo</option>
                        <option value="eventoAzul">Importante</option>
                        <option value="eventoVerde">Especial</option>
                        <option value="eventoAmarillo">Advertencia</option>
                      </select>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                    <textarea class="form-control" placeholder="Descripcion del evento" name="description" type="text" cols="10" rows="5"></textarea>
                </div>
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

<script>
var dateControl = document.querySelector('input[type="datetime-local"]');
dateControl.value = today   ;
dateFormat = "dd-MM-yy HH:mm:ss";
minDate = dateToday;

</script>