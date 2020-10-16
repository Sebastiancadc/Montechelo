
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
                                        <form role="form" method="POST" action="{{url('admin/solicitud')}}" >
                                            @csrf @method('POST')
                                            <div class="row">
                                                <div class="col-md-6">
                                                        <div class="form-group">

                                                            <div class="input-group input-group-merge input-group-alternative">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                                                </div>
                                                                <input class="form-control" placeholder="Nombre" name="Nombre" type="text">
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                                            </div>
                                                            <input class="form-control" placeholder="Apellido" name="Apellido" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="form-group mb-3">
                                                    <select class="form-control" id="exampleFormControlSelect1" name="Area_de_trabajo" id="Area_de_trabajo">
                                                        <option>Área de trabajo</option>
                                                        <option>Desarrollo</option>
                                                        <option>Talento humano</option>
                                                        <option>Recursos humanos</option>
                                                        <option>Producción</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                                            </div>
                                                            <input class="form-control" placeholder="Cedula" name="Cedula" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                            </div>
                                                            <input class="form-control" placeholder="Fecha" name="Fecha" type="date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="form-group mb-3">
                                                    <select class="form-control" id="exampleFormControlSelect1" name="Tipo_de_solicitud" id="Tipo_de_solicitud">
                                                        <option>Vacaciones</option>
                                                        <option>Tipo de solicitud</option>
                                                        <option>Desprendibles de pago</option>
                                                        <option>Certificado laboral</option>
                                                        <option>Certificado de nómina</option>
                                                    </select>
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
