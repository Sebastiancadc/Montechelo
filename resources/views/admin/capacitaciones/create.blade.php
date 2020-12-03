<!-- Modal -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h2 class="modal-title">
                    Crear capacitacion
                </h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form role="form" method="POST" action="{{route('store')}}">
                    @csrf @method('POST')
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <div class="form-group mb-3">
                                    <input class="form-control" placeholder="Titulo" name="titulo" id="titulo" type="text" required>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">

                                <input class="form-control" name="fecha" id="fecha" type="date"> </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">

                                <textarea class="form-control" placeholder="Descripcion" name="descripcion" id="descripcion" type="text" cols="100" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <div class="input-group input-group-merge input-group-alternative">

                                    <select class="form-control" id="exampleFormControlSelect1" name="categoria" id="categoria" required>
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
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">

                                <input class="form-control" placeholder="Link" name="link" id="link" type="text" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer no-bd">

                        <button type="submit" class="btn btn-primary">Añadir</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
