
                    <div class="col-md-4">
                        
                        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                          <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                              <div class="modal-body p-0"style="width: 535px;">
                                <div class="card bg-secondary border-0 mb-0">
  
                                  <div class="card-body px-lg-5 py-lg-5">
                                    <div class="text-center text-muted mb-4">
                                      <small>Crear repositorio</small>
                                    </div>
                                    <form role="form" method="POST" action="{{url('admin/repositorio')}}" >
                                        @csrf @method('POST') 
                                      <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                          </div>  
                                          <input class="form-control" placeholder="Tipo de archivo " name="tipo_archivo" type="text">
                                        </div>
                                      </div>
                                   
                                      <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                          </div>
                                          <input class="form-control"  placeholder="Autor"  name="autor" type="text">
                                        </div>
                                      </div>
                                      <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                          </div>
                                          <input class="form-control" placeholder="Observacion" name="observaciones" type="text">
                                        </div>
                                      </div>
 
                                      <div class="text-center">
                                      <form method="POST" action="{{route('subir')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                                      @csrf
              <label for="imagen"><b>Archivo: </b></label><br> <br>
              <input type="file" name="imagen">
              <input class="btn btn-primary my-4" type="submit" value="Enviar" style="margin-top: 30px">
              <a href="{{ url('admin/repositorio') }}" class="btn btn-danger mt-4">Cancelar</a>  
              </form>
                                   </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      