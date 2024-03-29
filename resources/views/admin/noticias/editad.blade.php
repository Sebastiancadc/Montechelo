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
						<a href="#">{{(__('Noticia'))}}</a>
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
					<form action="{{url('admin/noticia',$noticiaActualizar->Id_noticia)}}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="card-body">
							<h3 class="card-header"><b>{{__('Editar noticia')}}</b></h3>
							<div class="row">
								<div class="col-md-12">
									<div class="card-body">
										<div class="row">

											<div class="col-md-6">

												<h4><b>{{__('Título')}}</b></h4>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-align-center"></i>

														</span>
													</div>
													<input class="form-control" placeholder="{{__('Título')}}" name="title" id="title" value="{{$noticiaActualizar->title }}" type="text">
												</div>
											</div>

											<div class="col-md-6">

												<h4><b>{{__('Autor')}}</b></h4>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-user-edit"></i>
														</span>
													</div>
													<input class="form-control" placeholder="{{__('Autor')}}" name="autor" value="{{$noticiaActualizar->autor}}" disabled type="text">
												</div>
											</div>
											<div class="col-md-12">
												<br>
												<h4><b>{{__('Categoría')}}</b></h4>
												<select class="form-control" id="exampleFormControlSelect1" name="category_id">
													
													<option value="{{$noticiaActualizar->category}}">{{$noticiaActualizar->category}}</option>
													<option>{{__('Seleccione categoría')}}</option>
													<option>{{__('Diseño')}}</option>
													<option>{{__('Desarrollo')}}</option>
													<option>{{__('Software')}}</option>
													<option>{{__('Análisis')}}</option>
													<option>{{__('Producción')}}</option>
													
												</select>
											</div>

											<div class="col-md-12">
												<br>
												<h4><b>{{__('Fecha de publicación')}}</b></h4>
												<div class="input-group">
													<input class="form-control" type="date" name="fecha" value="{{$noticiaActualizar->fecha}}">
												</div>
											</div>


											<div class="col-md-12">
												<br>
												<h4><b>{{__('Descripción')}}</b></h4>
												<div class="input-group">
													<textarea class="form-control" name="body" id="mymce" type="text" cols="10" rows="5" required>{{$noticiaActualizar->body}}</textarea>
												</div>
											</div>
											<div class="col-md-12">
												<br>
												<h4><b>{{__('Imagen')}}</b></h4>
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-image"></i>
														</span>
													</div>
													<input type="file" class="form-control form-control-alternative" placeholder="img" value="{{$noticiaActualizar->image }}" name="image">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-10 col-md-9" style="margin-left: 72%;">
								<button type="submit" class="btn btn-primary  mt-4">{{__('Actualizar')}}</button>
								<a href="{{ url('admin/noticia') }}" class="btn btn-danger mt-4">{{__('Cancelar')}}</a>
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
