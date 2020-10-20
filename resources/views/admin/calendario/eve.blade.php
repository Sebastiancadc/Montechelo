
                    <div class="col-md-4">
                        
                        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                          <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                              <div class="modal-body p-0">
                                <div class="card bg-secondary border-0 mb-0">
  
                                  <div class="card-body px-lg-5 py-lg-5">
                                    <div class="text-center text-muted mb-4">
                                      <h3>Crea el evento</h3>
                                    </div>
                                    <form role="form" method="POST" action="{{asset('/calendario/create')}}" >
                                        @csrf @method('POST') 

                                      <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                          </div>
                                          <input class="form-control" placeholder="Titulo" name="titulo" type="text">
                                        </div>
                                      </div>
                                      <div class="form-group mb-3">
                                        <div class="form-group">
                                          <select class="form-control" id="exampleFormControlSelect1" name="class" id="class">
                                            <option>Tipo</option>
                                            <option value="eventoAzul">Importante</option>
                                            <option value="eventoVerde">Especial</option>
                                            <option value="eventoAmarillo">Advertencia</option>
                                          </select>
                                        </div>
                                    </div>
                                    
                                   
                                      <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                          </div>
                                          <input class="form-control" placeholder="fecha" name="fecha" type="date">
                                        </div>
                                      </div>

                                      <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <textarea class="form-control" placeholder="Descripcion del evento" name="descripcion" type="text" cols="10" rows="5"></textarea>
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
                          </div>
                        </div>
                      </div>