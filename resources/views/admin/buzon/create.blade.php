<form>
{{csrf_field()}}
<div class="form-group" action="{{url('/buzon')}}" method="POST">
        <label class="form-control-label" for="exampleFormControlInput1" name="tipo_de_sugerencia">{{'Tipo de sugerenecia'}}</label>
        <select class="form-control" id="tipo_de_sugerencia" name="tipo_de_sugerencia">
            <option>Quejas</option>
            <option>Reclamos</option>
            <option>Observacion</option>
            <option>Novedad</option>
            <option>Mejoras</option>
            <option>Felicitaciones</option>
        </select>
    </div>
<br>
    <div class="form-group">
        <label class="form-control-label" for="exampleFormControlTextarea1">{{'Descripcion'}}</label>
        <textarea class="form-control"  name= "descripcion" id="descripcion" rows="3"></textarea>
    </div>
    <br>
    <div class="form-group">
        <label class="form-control-label" for="exampleFormControlSelect1">{{'Area'}}</label>
        <select class="form-control"  name= "area" id="area" >
            <option>Seleccione el area</option>
            <option>Diseño</option>
            <option>Software</option>
            <option>Recursos Humanos</option>
            <option>Administracion</option>
        </select>
    </div>
    <div class="col-lg-6 col-5 text-right" style="float: right;">
       <input type="submit" value="enviar">
    </div>
</form>
