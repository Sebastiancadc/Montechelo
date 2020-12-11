@extends('admin.layouts.layoutAdmin')
@section('contents')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            @include('admin.repositorio.estadisticas')
            <div class="row">              
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Gestión de Archivos</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>Tipo archivo</th>
                                            <th>Autor</th>
                                            <th>Observaciones</th>
                                            <th>Imagen</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <a><?php if ($var = opendir('storage/repositorio/Test')) {
                                        while (false !== ($archivo = readdir($var))) {
                                        if ($archivo != "." && $archivo != "..") {
                                        print("".$archivo."<br>");
                                        }
                                        }
                                        closedir($var);
                                        print("");
                                        }?>
                                       </a>
                                        @foreach ($repositorio as $item)
                                        <tr>                                           
                                            <td>{{$item->tipo_archivo}}</td>
                                            <td>{{$item->autor}}</td>
                                            <td>{{$item->observaciones}}</td>
                                            <td><a href="#" data-toggle="modal" data-target="#ver{{$item->Id_Repositorio}}" > 
                                            <img src="{{$item->image}}"  width="50" height="50" class="img-fluid" ></a></td>                                           
                                        </tr>
                                    </tbody>                                    
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

</div>

@section('js')
<script src="{{asset("plantillaAdmin/assets/js/plugin/datatables/datatables.min.js")}}"></script>
<script src="{{asset("plantillaAdmin/assets/js/tablus.js")}}"></script>

<script src="{{asset("plantillaAdmin/assets/js/bootstrap-datetimepicker.min.js")}}"></script>
<script src="{{asset("plantillaAdmin/assets/js/select2.full.min.js")}}"></script>
<script>
$('#datepicker').datetimepicker({
    format: 'DD/MM/YYYY',
});
$('#datetime').datetimepicker({
			format: 'MM/DD/YYYY H:mm',
		});
</script>
@endsection
@endsection