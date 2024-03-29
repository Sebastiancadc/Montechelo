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
						<a href="#">{{__('Usuarios')}}</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">{{__('Editar')}}</a>
					</li>
				</ul>
			</div>
			@if(count($errors) > 0)
			<div class="col-md-12">
			<div class="alert alert-danger" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			  <ul>
			@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		  </ul>
		  </div>
		  </div>
			@endif
			<div class="col-md-9 ml-auto mr-auto">
				<div class="card">
					<form action="{{url('admin/usuario',$userActualizar->id)}}" method="POST">
						@method('PUT')
						@csrf
						<div class="card-body">
							<h3 class="card-header"><b>{{__('Editar usuario')}}</b></h3>
							<div class="row">
								<div class="col-md-12">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<h4><b>{{__('Nombre')}}</b></h4>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-user"></i>
														</span>
													</div>
													<input class="form-control" placeholder="{{('Nombre')}}" value='{{$userActualizar->name}}' name="name" type="text">
													@if ($errors->has('name'))
													<strong class="text-danger tamano">{{ $errors->first('name') }}</strong>
													@endif
												</div>
											</div>
											<div class="col-md-6">
												<h4><b>{{__('Rol')}}</b></h4>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-laptop"></i>
														</span>
													</div>
													<select id="basic" name="role" class="form-control">
														<option>{{$userActualizar->role}}</option>
														<option>Admin</option>
														<option>{{__('Colaborador')}}</option>
													</select>
													@if ($errors->has('role'))
													<strong class="text-danger tamano">{{ $errors->first('role') }}</strong>
													@endif
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<h4><b>{{__('Correo')}}</b></h4>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="far fa-envelope"></i>
										</span>
									</div>
									<input class="form-control" placeholder="Email" value='{{$userActualizar->email}}' name="email" type="email">
									@if ($errors->has('email'))
									<strong class="text-danger tamano">{{ $errors->first('email') }}</strong>
									@endif
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<h4><b>{{__('Fecha de nacimiento')}}</b></h4>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="far fa-calendar-alt"></i>
														</span>
													</div>
													<input type="text" class="form-control" id="datepicker" value='{{$userActualizar->cumpleanios}}' name="cumpleanios">
													@if ($errors->has('cumpleanios'))
													<strong class="text-danger tamano">{{ $errors->first('cumpleanios') }}</strong>
													@endif
												</div>
											</div>
											<div class="col-md-6">
												<h4><b>{{__('Género')}}</b></h4>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-venus-mars"></i>
														</span>
													</div>
													<select id="basic2" name="genero" class="form-control">
														<option>{{$userActualizar->genero}}</option>
														<option>{{__('Hombre')}}</option>
														<option>{{__('Mujer')}}</option>
														<option>{{__('Otro')}}</option>
													</select>
													@if ($errors->has('genero'))
													<strong class="text-danger tamano">{{ $errors->first('genero') }}</strong>
													@endif
												</div>
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
												<h4><b>{{__('Teléfono')}}</b></h4>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-phone"></i>
														</span>
													</div>
													<input class="form-control" name="phone" value="{{$userActualizar->phone}}" type="text" min="10" max="10"  pattern="[0-9]{10}" maxlength="10">
												</div>
												@if ($errors->has('phone'))
													<strong class="text-danger tamano">{{ $errors->first('phone') }}</strong>
													@endif
											</div>
											<div class="col-md-6">
												<h4><b>{{__('Área')}}</b></h4>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-people-carry"></i>
														</span>
													</div>
													<select id="basic3" name="area" class="form-control">
														<option>{{$userActualizar->area}}</option>
														<option>{{__('Programación')}}</option>
														<option>{{__('Diseño')}}</option>
														<option>{{__('Marketing')}}</option>
														<option>{{__('Producción')}}</option>
													</select>
													@if ($errors->has('area'))
													<strong class="text-danger tamano">{{ $errors->first('area') }}</strong>
													@endif
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<h4><b>{{__('Contraseña')}}</b></h4>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="fas fa-lock"></i>
										</span>
									</div>
									<input class="form-control" placeholder="{{__('Contraseña')}}" name="password" type="text">
								</div>
								@if ($errors->has('password'))
								<strong class="text-danger tamano">{{ $errors->first('password') }}</strong>
								@endif
							</div>
							<div class="card-body">
								<h4><b>{{__('Confirmar contraseña')}}</b></h4>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="fas fa-lock"></i>
										</span>
									</div>
									<input class="form-control" placeholder="{{__('Confirmar contraseña')}}" name="password_confirmation" type="text">
								</div>
							</div>
							<div class="col-sm-10 col-md-9" style="margin-left: 72%;">
								<button type="submit" class="btn btn-primary  mt-4">{{__('Editar')}}</button>
								<a href="{{ url('admin/usuario') }}" class="btn btn-danger mt-4">{{__('Cancelar')}}</a>
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
