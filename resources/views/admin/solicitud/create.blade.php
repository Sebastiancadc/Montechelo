<!-- Modal -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h2 class="modal-title">
                    Crear solicitud
                </h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="small" style="font-size: 14px;">Cree una nueva fila usando este formulario, asegúrese de llenarlas todos los campos</h3>
                <br>
                <form role="form" method="POST" action="{{url('admin/solicitud')}}">
                    @csrf @method('POST')
                    <div class="row">
                        <div class="col-md-6 pr-0">
                            <div class="form-group form-group-default">
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="Tunombre" name="nombre" required>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group form-group-default">
                                <label>Apellido</label>
                                <input type="text" class="form-control" placeholder="Tuapellido" name="apellido" required>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group form-group-default">
                                <label>Tipo de solicitud</label>
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1" name="tipo_solicitud" style="margin-top: -14px;width: 215px;margin-left: -21px;" required>
                                        <option></option>
                                        <option>Vacaciones</option>
                                        <option>Desprendibles de pago</option>
                                        <option>Certificado laboral</option>
                                        <option>Certificado de nómina</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group form-group-default">
                                <label> documento</label>
                                <input type="text" class="form-control" placeholder="111111111" min="10" max="10" required pattern="[0-9]{10}" maxlength="10" name="cedula" required>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group form-group-default">
                                <label>Teléfono</label>
                                <input type="text" class="form-control" placeholder="11111111" min="10" max="10" required pattern="[0-9]{10}" maxlength="10" name="telefono" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>Área de trabajo</label>
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1" name="area_trabajo" style="margin-top: -14px;width: 215px;margin-left: -21px;" required>
                                        <option></option>
                                        <option>Desarrollo</option>
                                        <option>Talento humano</option>
                                        <option>Recursos humanos</option>
                                        <option>Producción</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Fecha</label>
                                <input type="text" class="form-control" id="datepicker" name="datepicker" name="fecha" required>
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