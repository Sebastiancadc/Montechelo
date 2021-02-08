@extends('admin.layouts.layoutAdmin')
@section('contents')
<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">{{__('Administrador')}}</h4>
				<ul class="breadcrumbs">
					<li class="nav-home">
						<a href="#">
							<i class="flaticon-home"></i>
						</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">{{__('Roles')}}</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">{{__('Editar')}}</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 ml-auto mr-auto">
				<div class="card">
					<form action="{{url('admin/updatepermisos',$permisoActualizar->Id_Rol)}}" method="POST">
						@method('PUT')
						@csrf
						<div class="card-body">
							<h3 class="card-header">{{__('Edita el rol')}} {{$permisoActualizar->Roles}}</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="card-body">
										<div class="row">
											<div class="col-md-4">
												<h4>Chat</h4>
												<div class="input-group">
													<input type="checkbox" data-toggle="toggle" data-on="{{__('Habilitado')}}" name="chat_status" data-off="{{__('Deshabilitado')}}" @if ($permisoActualizar->chat_status == '1')
													checked data-onstyle="success" value="1"
													@else
													data-offstyle="danger" value="0"
													@endif>
												</div>
											</div>
											<div class="col-md-4">
												<h4>{{__('Directorio')}}</h4>
												<div class="input-group">
													<input type="checkbox" data-toggle="toggle" data-on="{{__('Habilitado')}}" name="directorio_status" data-off="{{__('Deshabilitado')}}" @if ($permisoActualizar->directorio_status == '1')
													checked data-onstyle="success" value="1"
													@else
													data-offstyle="danger" value="0"
													@endif>
												</div>
											</div>
											<div class="col-md-4">
												<h4>{{__('Talento humano')}}</h4>
												<div class="input-group">
													<input type="checkbox" data-toggle="toggle" data-on="{{__('Habilitado')}}" name="talento_status" data-off="{{__('Deshabilitado')}}" @if ($permisoActualizar->talento_status == '1')
													checked data-onstyle="success" value="1"
													@else
													data-offstyle="danger" value="0"
													@endif>
												</div>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-4">
												<h4>{{__('Repositorio')}}</h4>
												<div class="input-group">
													<input type="checkbox" data-toggle="toggle" data-on="{{__('Habilitado')}}" name="repositorio_status" data-off="{{__('Deshabilitado')}}" @if ($permisoActualizar->repositorio_status == '1')
													checked data-onstyle="success" value="1"
													@else
													data-offstyle="danger" value="0"
													@endif>
												</div>
											</div>
											<div class="col-md-4">
												<h4>{{__('Calendario')}}</h4>
												<div class="input-group">
													<input type="checkbox" data-toggle="toggle" data-on="{{__('Habilitado')}}" name="calendario_status" data-off="{{__('Deshabilitado')}}" @if ($permisoActualizar->calendario_status == '1')
													checked data-onstyle="success" value="1"
													@else
													data-offstyle="danger" value="0"
													@endif>
												</div>
											</div>
											<div class="col-md-4">
												<h4>{{__('Solicitud')}}</h4>
												<div class="input-group">
													<input type="checkbox" data-toggle="toggle" data-on="{{__('Habilitado')}}" name="solicitud_status" data-off="{{__('Deshabilitado')}}" @if ($permisoActualizar->solicitud_status == '1')
													checked data-onstyle="success" value="1"
													@else
													data-offstyle="danger" value="0"
													@endif>
												</div>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-4">
												<h4>{{__('Buzón')}}</h4>
												<div class="input-group">
													<input type="checkbox" data-toggle="toggle" data-on="{{__('Habilitado')}}" name="buzon_status" data-off="{{__('Deshabilitado')}}" @if ($permisoActualizar->buzon_status == '1')
													checked data-onstyle="success" value="1"
													@else
													data-offstyle="danger" value="0"
													@endif>
												</div>
											</div>
											<div class="col-md-4">
												<h4>{{__('Plan estratégico')}}</h4>
												<div class="input-group">
													<input type="checkbox" data-toggle="toggle" data-on="{{__('Habilitado')}}" name="plan_status" data-off="{{__('Deshabilitado')}}" @if ($permisoActualizar->plan_status == '1')
													checked data-onstyle="success" value="1"
													@else
													data-offstyle="danger" value="0"
													@endif>
												</div>
											</div>
											<div class="col-md-4">
												<h4>{{__('Novedad')}}</h4>
												<div class="input-group">
													<input type="checkbox" data-toggle="toggle" data-on="{{__('Habilitado')}}" name="novedad_status" data-off="{{__('Deshabilitado')}}" @if ($permisoActualizar->novedad_status == '1')
													checked data-onstyle="success" value="1"
													@else
													data-offstyle="danger" value="0"
													@endif>
												</div>
											</div>
										</div>
										<div class="col-sm-10 col-md-9" style="margin-left: 72%;">
											<button type="submit" class="btn btn-primary  mt-4">{{__('Editar')}}</button>
											<a href="{{ url('admin/permisoslista') }}" class="btn btn-danger mt-4">{{__('Cancelar')}}</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		@section('js')
		<script src="{{asset("plantillaAdmin/assets/js/bootstrap-datetimepicker.min.js")}}"></script>
		<script src="{{asset("plantillaAdmin/assets/js/select2.full.min.js")}}"></script>
		<script>
			$('#datepicker').datetimepicker({
				format: 'YYYY/MM/DD',
			});
			$('#basic').select2({
				theme: "bootstrap"
			});
			$('#basic2').select2({
				theme: "bootstrap"
			});
			$('#basic3').select2({
				theme: "bootstrap"
			});
		</script>
		@endsection
		@endsection
