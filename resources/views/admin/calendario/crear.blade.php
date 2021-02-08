<!-- Modal -->
<?php
$user = auth()->user();
?>
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h2 class="modal-title">
                    <b>{{__('Crear evento')}}</b>
                </h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="small" style="font-size: 14px;">{{__('Cree una nueva fila usando este formulario, asegúrese de llenar todos los campos')}}</h3>
                <br>
                <form role="form" method="POST" action="{{url('Calendario/creareventoad')}}">
                    @csrf @method('POST')
                    <input value="{{Auth::user()->id}}" name="Usuario_id_Usuario" hidden>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>{{__('Título del evento')}}</label>
                                <input type="text" class="form-control" placeholder="{{__('Titulo del evento')}}"name="name" >
                                @if ($errors->has('name'))
                                <strong class="text-danger tamano">{{ $errors->first('name') }}</strong>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group form-group-default">
                                <label>{{__('Fecha inicial')}}</label>
                                <input type="text" class="form-control" id="datetimes"  name="start_time" >
                                @if ($errors->has('start_time'))
                                <strong class="text-danger tamano">{{ $errors->first('start_time') }}</strong>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group form-group-default">
                                <label>{{__('Fecha final')}}</label>
                                <input type="text" class="form-control" id="datetime"  name="end_time" >
                                @if ($errors->has('end_time'))
                                <strong class="text-danger tamano">{{ $errors->first('end_time') }}</strong>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>{{__('Tipo')}}</label>
                                <div class="col-md-12">
                                    <select id="basic" name="className" class="col-md-15">
                                        <option value="">&nbsp;</option>
                                        <option value="Importante">{{__('Importante')}}</option>
                                        <option value="Especial">{{__('Especial')}}</option>
                                        <option value="Advertencia">{{__('Advertencia')}}</option>
                                    </select>
                                    @if ($errors->has('className'))
                                    <strong class="text-danger tamano">{{ $errors->first('className')}}</strong>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>{{__('Descripción del evento')}}</label>
                                <textarea class="form-control" name="description" type="text" cols="10" rows="5" ></textarea>
                                @if ($errors->has('description'))
                                <strong class="text-danger tamano">{{ $errors->first('description') }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer no-bd">
                        <button type="submit" class="btn btn-primary">{{__('Añadir')}}</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('Cancelar')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
