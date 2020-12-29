<!-- Modal -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h2 class="modal-title">
                    Crear anuncio
                </h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="small" style="font-size: 14px;">Cree una nueva fila usando este formulario, asegúrese de llenarlas todos los campos</h3>
                <br>
                <form role="form" method="POST" action="{{url('admin/crearAnuncio')}}">
                    @csrf @method('POST')
                    <div class="row">
                        <div class="col-md-11 pr-0">
                            <div class="form-group form-group-default">
                                <label>Titulo</label>
                                <input type="text" class="form-control" placeholder="titulo" name="titulo" >
                                @if ($errors->has('titulo'))
                                <strong class="text-danger tamano">{{ $errors->first('titulo') }}</strong>
                                @endif
                            </div>
                        </div>
                        <input type="text" class="form-control" value="{{Auth::user()->id}}" name="user_id" hidden>
                        <div class="col-md-11">
                            <div class="form-group form-group-default">
                                <label>Descripcion</label>
                                <textarea class="form-control" name="descripcion" cols="53" rows="5"></textarea>
                                @if ($errors->has('descripcion'))
                                <strong class="text-danger tamano">{{ $errors->first('descripcion') }}</strong>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-11 pr-0">
                            <div class="form-group form-group-default">
                                <label>Tipo</label>
                                <div class="form-group">
                                    <select id="basic" name="tipo" >
                                        <option> </option>
                                        <option value="default">Default- azul oscuro</option>
                                        <option value="info">Info - azul claro</option>
                                        <option value="success">Success - verde </option>
                                        <option value="warning">Warning - naranja </option>
                                        <option value="danger">Danger - rojo</option>
                                    </select>
                                    @if ($errors->has('tipo'))
                                    <strong class="text-danger tamano">{{ $errors->first('tipo') }}</strong>
                                    @endif
                                </div>
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