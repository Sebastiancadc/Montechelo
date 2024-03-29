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
						<a href="#">{{__('Eventos')}}</a>
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
					<form action="{{url('Calendario/editarEventoAd',$eventos->id)}}" method="POST">
						@method('PUT')
						@csrf
						<div class="card-body">
							<h3 class="card-header"><b>{{__('Editar evento')}}</b></h3>
							<div class="row">
								<div class="col-md-12">
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<h4><b>{{__('Nombre')}}</b></h4>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-user"></i>
														</span>
													</div>
													<input class="form-control" placeholder="{{__('Nombre')}}" value='{{$eventos->name}}' name="name" type="text">
												</div>
												@if ($errors->has('name'))
                                				<strong class="text-danger tamano">{{ $errors->first('name') }}</strong>
                                				@endif
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<h4><b>{{__('Fecha inicial')}}</b></h4>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="far fa-calendar-alt"></i>
														</span>
													</div>
													<input type="text" class="form-control" id="datetime" value='{{$eventos->start_time}}' name="start_time">
												</div>
												@if ($errors->has('start_time'))
                                				<strong class="text-danger tamano">{{ $errors->first('start_time') }}</strong>
                                				@endif
											</div>
											<div class="col-md-6">
												<h4><b>{{__('Fecha final')}}</b></h4>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="far fa-calendar-alt"></i>
														</span>
													</div>
													<input type="text" class="form-control" id="datetimes" value='{{$eventos->end_time}}' name="end_time">
												</div>
												@if ($errors->has('end_time'))
                                				<strong class="text-danger tamano">{{ $errors->first('end_time') }}</strong>
                                				@endif
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<h4><b>{{__('Área')}}</b></h4>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-people-carry"></i>
														</span>
													</div>
													<select id="basic" name="className" class="form-control">
														<option>{{$eventos->className}}</option>
														<option value="Importante">{{__('Importante')}}</option>
														<option value="Especial">{{__('Especial')}}</option>
														<option value="Advertencia">{{__('Advertencia')}}</option>
													</select>
												</div>
												@if ($errors->has('className'))
                                				<strong class="text-danger tamano">{{ $errors->first('className') }}</strong>
                                				@endif
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<h4><b>{{__('Descripción')}}</b></h4>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="fas fa-book-open"></i>
										</span>
									</div>
									<textarea class="form-control" name="description" type="text" cols="10" rows="5" required>{{$eventos->description}}</textarea>
								</div>
								@if ($errors->has('description'))
								<strong class="text-danger tamano">{{ $errors->first('description') }}</strong>
								@endif
							</div>
							<div class="col-sm-10 col-md-9" style="margin-left: 72%;">
								<button type="submit" class="btn btn-primary  mt-4">{{__('Editar')}}</button>
								<a href="{{ url('admin/eventos') }}" class="btn btn-danger mt-4">{{__('Cancelar')}}</a>
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
		$('#datetime').datetimepicker({
			format: 'YYYY/MM/DD H:mm',
		});
		$('#datetimes').datetimepicker({
			format: 'YYYY/MM/DD H:mm',
		});
		$('#basic').select2({
			theme: "bootstrap"
		});
	</script>
	@endsection
	@endsection
