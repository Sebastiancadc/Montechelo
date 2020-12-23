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