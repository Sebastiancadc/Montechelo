<!-- Modal -->
<div class="modal fade" id="addRowModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h2 class="modal-title">
                    Crear Colaborador
                </h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="small" style="font-size: 14px;">Cree una nueva fila usando este formulario, asegúrese de llenar todos los campos</h3>
                <br>
                <form role="form" method="POST" action="{{url('admin/createcolaborador')}}">
                    @csrf @method('POST')
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="Tu nombre..." name="name" >
                                @if ($errors->has('name'))
                                <strong class="text-danger tamano">{{ $errors->first('name') }}</strong>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Correo</label>
                                <input type="email" class="form-control" placeholder="Tucorreo@montechelo.com.co" name="email" pattern="^[a-zA-Z0-9_.+-]+@(?:(?:[a-zA-Z0-9-]+\.)?[a-zA-Z]+\.)?(gmail|hotmail)\.com$">
                                @if ($errors->has('email'))
                                <strong class="text-danger tamano">{{ $errors->first('email') }}</strong>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group form-group-default">
                                <label>Fecha de nacimiento</label>
                                <input type="date" class="form-control" name="cumpleanios" >
                                @if ($errors->has('cumpleanios'))
                                <strong class="text-danger tamano">{{ $errors->first('cumpleanios') }}</strong>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>Telefono</label>
                                <input type="text" class="form-control" placeholder="3123123212..." name="phone" maxlength="11">
                                @if ($errors->has('phone'))
                                <strong class="text-danger tamano">{{ $errors->first('phone') }}</strong>
                                @endif
                            </div>
                        </div>
                        <input type="text" class="form-control" name="role" value="colaborador" hidden>
                        <input type="text" class="form-control" name="Rol_Id_Rol" value="2" hidden>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>Contraseña</label>
                                <input class="form-control" type="password" name="password" >
                                @if ($errors->has('password'))
                                <strong class="text-danger tamano">{{ $errors->first('password') }}</strong>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>Confirmar contraseña</label>
                                <input class="form-control" type="password" name="password_confirmation" >
                            
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