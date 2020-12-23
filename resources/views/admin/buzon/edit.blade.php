@extends('admin/buzon')
@section('card')
<div class="card-body">
    <form method="POST" action="{{route('admin/update', {{$editarbuzon->id}})}}">
        @csrf <div class="form-group">
            <label class="form-control-label" for="exampleFormControlInput1">Titulo</label>
            <input type="email" name='titulo' class="form-control" id="titulo"  value="{{$editarbuzon->titulo}}">
        </div>
        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlTextarea1">Descripcion</label>
            <textarea class="form-control" id="descripcion" name='descripcion' rows="3" value="{{$editarbuzon->descripcion}}"></textarea>
        </div>
        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlSelect1" name='area'>Area</label>
            <select class="form-control" id="area" value="{{$editarbuzon->area}}">
                <option>Seleccione el area</option>
                <option>Diseño</option>
                <option>Software</option>
                <option>Recursos Humanos</option>
                <option>Administracion</option>
            </select>
        </div>
        <div class="col-lg-6 col-5 text-right" style="float: right;">
            <a href="AgregarBuzon.html" class="btn btn-sm btn-neutral">actualizar</a>
        </div>
    </form>
    @if(session('update'))
    <div class="alert alert-primary" role="alert">
        {{session('update')}}
    </div>
    @endif
</div>
@endsection