
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
                <form role="form" method="POST" action="{{url('admin/crearnoticiasAD')}}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                  
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                          <label>{{__('Título')}}</label>
                          <input class="form-control" placeholder="{{__('Título')}}" name="title" type="text">
           
                      </div>
                  </div>


                  <div class="col-sm-12">
                    <div class="form-group form-group-default">
                        <label>{{__('Categoria')}}</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="category">
                          <option>{{__('Seleccione la categoría')}}</option>
                          <option>{{__('Diseño')}}</option>
                          <option>{{__('Desarrollo')}}</option>
                          <option>{{__('Software')}}</option>
                          <option>{{__('Análisis')}}</option>
                          <option>{{__('Producción')}}</option>
                      </select>
         
                    </div>
                </div>
                 
                    <input class="form-control" name="autor" value="{{Auth::user()->name}}" type="hidden">
                    
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                          <label>{{__('Fecha de publicación')}}</label>
                          <input class="form-control" type="date" name="fecha"  >
                      </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group form-group-default">
                        <label>{{__('Descripción')}}</label>
                        <textarea class="form-control" placeholder="{{__('Descripción')}}" name="body" type="text" cols="10" rows="5" required></textarea>
         
                    </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                      <label>{{__('Imagen portada')}}</label>
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

