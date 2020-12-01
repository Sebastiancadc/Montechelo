<!-- Modal -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header no-bd">
              <h2 class="modal-title">                
                  Crear usuario
              </h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <h3 class="small" style="font-size: 14px;">Cree una nueva fila usando este formulario, asegúrese de llenarlas todos los campos</h3>
             <br>
              <form  role="form" method="POST" action="{{url('admin/usuario')}}">
                  @csrf @method('POST') 
                  <div class="row">  
                      <div class="col-sm-12">
                          <div class="form-group form-group-default">
                              <label>Nombre</label>
                              <input  type="text" class="form-control" placeholder="Tu nombre..." name="name" required>
                          </div>
                      </div>                     
                      
                      <div class="col-md-6 pr-0">
                          <div class="form-group form-group-default">
                              <label>Fecha de nacimiento</label>
                              <input type="text" class="form-control" id="datepicker" name="datepicker" name="cumpleanios" required>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group form-group-default">
                              <label>Genero</label>
                              <div class="form-group">
                                  <select class="form-control" id="exampleFormControlSelect1" name="genero" style="margin-top: -14px;width: 215px;margin-left: -21px;" required>
                                      <option></option>
                                      <option>Hombre</option>
                                      <option>Mujer</option>
                                      <option>Otro</option>
                                  </select>
                              </div>
                          </div>
                          
                      </div>
                    
                      <div class="col-md-6">
                          <div class="form-group form-group-default">
                              <label>Telefono</label>
                              <input type="text" class="form-control" placeholder="3123123212..." name="phone" required>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group form-group-default">
                              <label>Rol</label>
                              <div class="form-group">
                                  <select class="form-control" id="exampleFormControlSelect1" name="role" style="margin-top: -14px;width: 215px;margin-left: -21px;" required>
                                      <option></option>
                                      <option value="admin">Administrador</option>
                                      <option >Colaborador</option>
                                      
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-12">
                          <div class="form-group form-group-default">
                              <label>Correo</label>
                              <input  type="email" class="form-control" placeholder="Tucorreo@montechelo.com.co..."  name="email" required>
                          </div>
                      </div> 
                      
                      <div class="col-md-6">
                          <div class="form-group form-group-default">
                              <label>Contraseña</label>
                              <input class="form-control" type="password" name="password" required>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group form-group-default">
                              <label>Confirmar contraseña</label>
                              <input class="form-control" type="password" name="password_confirmation" required>
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