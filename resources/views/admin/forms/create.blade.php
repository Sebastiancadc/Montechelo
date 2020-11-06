
                    <div class="col-md-4">
                        
                        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                          <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                              <div class="modal-body p-0">
                                <div class="card bg-secondary border-0 mb-0">
  
                                  <div class="card-body px-lg-5 py-lg-5">
                                    <div class="text-center text-muted mb-4">
                                      <small>Crea el usuario</small>
                                    </div>
                                    <form role="form" method="POST" action="{{url('admin/usuario')}}" >
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
                                      <input value="colaborador" name="role" hidden>
                                      <div class="row">
                                        <div class="col-md-6">
                                      <div class="form-group">
                                          <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control datepicker" id="datepicker" name="cumpleanios" placeholder="Select date" type="text">
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
                                    <div class="row">
                                      <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                          <input class="form-control" name="phone" placeholder="Telefono" type="text" min="10" max="10" required pattern="[0-9]{10}" maxlength="10">
                                      </div>
                                  </div>
                                </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1" name="area" id="genero">
                                          <option>Area</option>
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
                        <script src="{{asset("plantilla/vendor/jquery/dist/jquery.min.js")}}"></script>

                     <script src="{{asset("plantilla/vendor/moment/min/moment.min.js")}}"></script>
                      <script src="{{asset("plantilla/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")}}"></script>
                      <script>
                        $(function () {
                            $('#datepicker').datepicker({
                            });
                        });
                      </script>