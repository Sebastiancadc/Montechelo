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
						<a href="#">{{__('Novedad')}}</a>
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
					<form action="{{url('admin/novedad',$novedadActualizar->id_novedad)}}" method="POST">
						@method('PUT')
						@csrf
						<div class="card-body">
							<h3 class="card-header"><b>{{__('Editar el estado de la novedad')}}</b></h3>
							<div class="row">
								<div class="col-md-12">
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<h4><b>{{__('Estado')}}</b></h4>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-hands-helping"></i>
														</span>
													</div>
													<select id="basic" name="estado" class="form-control">
														<option>{{$novedadActualizar->estado}}</option>
														<option>{{__('Pendiente')}}</option>
														<option>{{__('Revisado')}}</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-10 col-md-9" style="margin-left: 72%;">
								<button type="submit" class="btn btn-primary  mt-4">{{__('Editar')}}</button>
								<a href="{{ url('admin/novedad') }}" class="btn btn-danger mt-4">{{__('Cancelar')}}</a>
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
	</script>
	@endsection
	@endsection
