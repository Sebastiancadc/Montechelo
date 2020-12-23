{{--
                    <div class="col-md-4">
                        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                          <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                              <div class="modal-body p-0">
                                <div class="card bg-secondary border-0 mb-0">
                                  <div class="card-body px-lg-5 py-lg-5">
                                    <div class="text-center text-muted mb-4">
                                      <small>Crea la noticia</small>
                                    </div>
                                    <form role="form" method="POST" action="{{url('crearnoticias')}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <input type="hidden" name="user_id"  name="user_id" value="{{$user->id}}";>
                                      <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                          <input class="form-control" placeholder="titulo" name="title" type="text">
                                        </div>
                                      </div>
                                      <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                                <select class="form-control" id="exampleFormControlSelect1" name="">
                                                  <option>Categoria</option>
                                                  <option>Programacion</option>
                                                  <option>Mujer</option>
                                                  <option>Otro</option>
                                                </select>
                                        </div>
                                      </div>
                                      <div class="form-group mb-3">
                                        <input class="form-control" placeholder="autor" name="" type="text">
                                        </div>
                                      <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <textarea class="form-control" placeholder="Descripcion de la notica" name="descripcion" type="text" cols="10" rows="5" required></textarea>
                                        </div>
                                      </div>
                                      <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <input type="file"  class="form-control form-control-alternative" placeholder="" value="" name="image">
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
                        }); --}}
                      {{-- </script> --}}


                    {{-- ---------------------------- --}}

<!-- Modal -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h2 class="modal-title">
                    Crear noticia
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
                      <input class="form-control" placeholder="titulo" name="title" type="text">
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <select class="form-control" id="exampleFormControlSelect1" name="">
                            <option>Seleccione categoria</option>
                            <option>Diseño</option>
                            <option>Desarrollo</option>
                            <option>Software</option>
                            <option>Analisis</option>
                            <option>Produccion</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <input class="form-control" placeholder="autor" name="" type="text">
                    </div>
                  <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <textarea class="form-control" placeholder="Descripcion de la notica" name="descripcion" type="text" cols="10" rows="5" required></textarea>
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <input type="file"  class="form-control form-control-alternative"  name="image">
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

