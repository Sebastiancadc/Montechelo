<!-- Modal -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h2 class="modal-title">                
                    Crear anuncio
                </h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="small" style="font-size: 14px;">Cree una nueva fila usando este formulario, asegúrese de llenarlas todos los campos</h3>
               <br>
               <form role="form" method="POST" action="{{url('admin/crearAnuncio')}}" >
                @csrf @method('POST')   
                    <div class="row">  
                        <div class="col-md-11 pr-0">
                            <div class="form-group form-group-default">
                                <label>Titulo</label>
                                <input  type="text" class="form-control" placeholder="titulo"  name="titulo" required>
                            </div>
                        </div>
                        <input  type="text" class="form-control" value="{{Auth::user()->id}}" name="user_id" hidden>
                        <div class="col-md-11">
                            <div class="form-group form-group-default">
                                <label>Descripcion</label>
                                <textarea class="form-control" name="descripcion"  cols="53" rows="5"></textarea>
                            </div>
                        </div>                      
                        <div class="col-md-11 pr-0">
                            <div class="form-group form-group-default">
                                <label>Tipo</label>
                                <div class="form-group">
                                    <select id="basic" name="tipo" required>
                                        <option> </option> 
                                        <option value="default" >Default- azul oscuro</option>
                                        <option value="info" >Info - azul claro</option>
                                        <option value="success">Success - verde </option>
                                        <option value="warning">Warning - anaranjado </option>
                                        <option value="danger">Danger - rojo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer no-bd">
                        <button type="submit"  class="btn btn-primary">Añadir</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
  </div>