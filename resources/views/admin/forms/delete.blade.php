<div class="col-md-4">
                           
    <div class="modal fade" id="deleteUsuario{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary border-0 mb-0">

              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>Eliminar el usuario</small>
                </div>
                <form role="form" method="POST" action="{{ route('admin.delete',$user) }}" >
                    @csrf @method('DELETE') 

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">Eliminar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>