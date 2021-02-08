
<!-- Modal -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h2 class="modal-title">
                    {{__('Crear noticia')}}
                </h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="{{url('crearnoticias')}}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="user_id"  name="user_id" value="";>
                  <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                      <input class="form-control" placeholder="{{__('Título')}}" name="title" type="text">
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <select class="form-control" id="exampleFormControlSelect1" name="">
                            <option>{{__('Seleccione la categoría')}}</option>
                            <option>{{__('Diseño')}}</option>
                            <option>{{__('Desarrollo')}}</option>
                            <option>{{__('Software')}}</option>
                            <option>{{__('Análisis')}}</option>
                            <option>{{__('Producción')}}</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <input class="form-control" placeholder="autor" name="" type="text">
                    </div>
                  <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <textarea class="form-control" placeholder="{{__('Descripción')}}" name="descripcion" type="text" cols="10" rows="5" required></textarea>
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <input type="file"  class="form-control form-control-alternative"  name="image">
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">{{__('Crear')}}</button>
                    <button class="btn btn-danger ml-auto" data-dismiss="modal">{{__('Cancelar')}}</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>

