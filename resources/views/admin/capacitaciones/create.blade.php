<div class="col-md-4">

    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card bg-secondary border-0 mb-0">

                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <small>Crear capacitacion</small>
                            </div>
                            <form role="form" method="POST" action="{{route('store')}}">
                                @csrf @method('POST')
                                <div class="form-group mb-3">

                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">

                                            <input class="form-control" placeholder="Titulo" name="titulo" id="titulo" type="text" required >
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control" name="fecha" id="fecha" type="date" >
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
    
                                            <textarea class="form-control" placeholder="Descripcion" name="descripcion" id="descripcion" type="text" cols="100" rows="5" required ></textarea>
                                        </div>
                                    </div>

                                    <div class="input-group input-group-merge input-group-alternative">

                                        <select class="form-control" id="exampleFormControlSelect1" name="categoria" id="categoria" required >
                                            <option>Seleccione categoria</option>
                                            <option>Diseño</option>
                                            <option>Desarrollo</option>
                                            <option>Software</option>
                                            <option>Analisis</option>
                                            <option>Produccion</option>
                                        </select>
                                    </div>
                                    <br>

                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <input class="form-control" placeholder="Link" name="link" id="link" type="text" required >
                                        </div>
                                    </div>
                                
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">crear</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





