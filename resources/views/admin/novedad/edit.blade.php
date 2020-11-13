<div class="col-md-4">

    <div class="modal fade" id="editNovedad{{$novedad->id_novedad}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary border-0 mb-0">

              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>Edita el novedad</small>
                </div>
                <form role="form" method="POST" action="{{ url('admin/novedad',$novedad->id)}}" >
                    @csrf @method ('PUT')
                  <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" placeholder="Email" value='{{$novedad->estado}}' name="email" type="text">
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">Editar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
