<!-- Modal -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h2 class="modal-title">                
                    Crear Capacitacion
                </h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="small" style="font-size: 14px;">Cree una nueva fila usando este formulario, asegúrese de llenarlas todos los campos</h3>
               <br>
               <form role="form" method="POST" action="{{route('store')}}">
                @csrf @method('POST')
                    <div class="row">  
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Titulo</label>
                                <input  type="text" class="form-control" placeholder="Titulo" name="titulo" required>
                            </div>
                        </div>                     
                        
                        <div class="col-md-12 ">
                            <div class="form-group form-group-default">
                                <label>Fecha de capacitacion</label>
                                <input type="text" class="form-control" id="datepicker" name="fecha" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Categoria</label>
                                <div class="form-group">
                                    <select id="basic" name="categoria" class="col-md-15">
                                        <option>Seleccione categoria</option>
                                        <option>Diseño</option>
                                        <option>Desarrollo</option>
                                        <option>Software</option>
                                        <option>Analisis</option>
                                        <option>Produccion</option>
                                      </select>
                                </div>
                            </div>                           
                        </div>
                        <input class="form-control" name="user_id" value="{{Auth::user()->id}}" hidden> </div>
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Link</label>
                                <input type="text" class="form-control" placeholder="Link" name="link" required>
                            </div>
                    </div>

                    <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>descripcion</label>
                                <textarea class="form-control" placeholder="Descripcion" name="descripcion" type="text" cols="10" rows="5" required></textarea>
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