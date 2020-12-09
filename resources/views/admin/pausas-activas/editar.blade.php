@extends('admin.layoutAdmin')
@section('contents')
<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Administrador</h4>
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
						<a href="#">Pausas activas</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">Editar</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 ml-auto mr-auto">
			<div class="card">
				<form action="{{url('admin/updatePausa',$pausasEditar->id)}}" method="POST" enctype="multipart/form-data">
          		@method('PUT')
         		 @csrf  
				<div class="card-body">
					<h3 class="card-header">Edita la pausa activa</h3>					
					<div class="row">
						<div class="col-md-12">
							<div class="card-body">
								<div class="row">
									<div class="col-md-12">											
											<div class="input-group">
												<div class="input-group-prepend">
													<video width='660' height='400' controls > <source src="{{$pausasEditar->video}}" type='video/mp4'> </video>
												</div>												
											</div>
											<br>
											<div class="fallback">
												<input name="video" type="file" required/>
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-10 col-md-9" style="margin-left: 72%;">						
					<button type="submit" class="btn btn-primary  mt-4">Editar</button>
					<a href="{{ url('admin/pasuasAdmin') }}" class="btn btn-danger mt-4">Cancelar</a>
					</div>
				</div>
			</div>
		</form>
		</div>
		</div>
	</div>
@endsection