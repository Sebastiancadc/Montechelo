<!-- Modal -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h2 class="modal-title">
                    Crear novedad
                </h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="small" style="font-size: 14px;">Cree una nueva fila usando este formulario, asegúrese de llenarlas todos los campos</h3>
                <br>
                <form role="form" method="POST" action="{{ url('admin/novedad')}}">
                    @csrf @method('POST')
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Area</label>
                                <div class="form-group">
                                    <select id="basic" name="area" class="col-md-15">
                                        <option> </option>
                                        <option>Desarrollo</option>
                                        <option>Talento humano</option>
                                        <option>Recursos humanos</option>
                                        <option>Produccion</option>
                                    </select>
                                    @if ($errors->has('area'))
                                    <strong class="text-danger tamano">{{ $errors->first('area') }}</strong>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Fecha</label>
                                <input type="text" class="form-control" id="datepicker" name="fecha" name="cumpleanios" >
                                @if ($errors->has('fecha'))
                                <strong class="text-danger tamano">{{ $errors->first('fecha') }}</strong>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Novedad</label>
                                <input type="text" class="form-control" id="datepicker" name="novedad" >
                                @if ($errors->has('novedad'))
                                <strong class="text-danger tamano">{{ $errors->first('novedad') }}</strong>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Descripcion de la novedad</label>
                                <textarea class="form-control" name="descripcion" type="text" cols="10" rows="5" ></textarea>
                                @if ($errors->has('descripcion'))
                                <strong class="text-danger tamano">{{ $errors->first('descripcion') }}</strong>
                                @endif
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