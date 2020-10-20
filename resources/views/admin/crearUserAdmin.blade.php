
                    <div class="col-md-4">
                        
                        <div class="modal fade" id="modal-forms" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                          <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                              <div class="modal-body p-0">
                                <div class="card bg-secondary border-0 mb-0">
  
                                  <div class="card-body px-lg-5 py-lg-5">
                                    <div class="text-center text-muted mb-4">
                                      <small>Crea el admin</small>
                                    </div>
                                    <form role="form" method="POST" action="{{url('admin/usuario/createadmin')}}" >
                                        @csrf @method('POST') 
                                      <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                          </div>
                                          <input class="form-control" placeholder="Nombre" name="name" type="text">
                                        </div>
                                      </div>
                                      <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                          </div>
                                          <input class="form-control" placeholder="Email" name="email" type="email">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                          <div class="input-group input-group-merge input-group-alternative">
                                        
                                            <input class="form-control datepicker" placeholder="Select date" type="date" name="cumpleaños" id="cumpleaños">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <select class="form-control" id="exampleFormControlSelect1" name="genero" id="genero">
                                            <option>Genero</option>
                                            <option>Hombre</option>
                                            <option>Mujer</option>
                                            <option>Otro</option>
                                          </select>
                                        </div>
                                    </div>
                                    </div>
                                      <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                          </div>
                                          <input class="form-control" placeholder="Contraseña" name="password" type="password">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                          </div>
                                          <input class="form-control" placeholder="Confimrar contraseña" name="password_confirmation" type="password">
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