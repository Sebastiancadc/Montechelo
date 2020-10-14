

@extends('admin.layout')
<link rel="icon" href="{{asset("plantilla/img/theme/isotipo.png")}}" type="image/png">
@section('content')
  
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Solicitud</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card-wrapper">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Solicitud Online.</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <hr />
                        <form>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="validationDefault01">Lorem</label>
                                        <input type="text" class="form-control" id="validationDefault01" placeholder="Lorem" value="Mark" required>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="validationDefault02">Lorem</label>
                                        <input type="text" class="form-control" id="validationDefault02" placeholder="Lorem" value="Otto" required>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="validationDefaultUsername">Lorem</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                            </div>
                                            <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Lorem" aria-describedby="inputGroupPrepend2" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="validationDefault03">Lorem</label>
                                        <input type="text" class="form-control" id="validationDefault03" placeholder="Lorem" required>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-control-label" for="validationDefault03">Solicitud</label>
                                    <select class="form-control select2" data-placeholder="Solicitud"> 
                                        <option value="Lorem">Vacaciones</option>
                                        <option value="Lorem">Desprendibles de pago</option>
                                        <option value="Lorem">Certificado laboral</option>
                                        <option value="Lorem">Certificado de nómina</option>
                                    </select>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <label class="form-control-label" for="validationDefault03">Descripción</label>
                                    <textarea rows="2" class="form-control" placeholder="Solicitud"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" id="invalidCheck2" type="checkbox" value="" required>
                                    <label class="custom-control-label" for="invalidCheck2">Acepto los términos y condiciones.</label>
                                    <div class="invalid-feedback">
                                        Debes aceptar los términos y condiciones antes de enviar.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
                <div class="copyright text-center text-lg-left text-muted">
                    &copy; 2020  <a href="" class="font-weight-bold ml-1" >Grupo 3.</a>
                </div>
            </div>
            <div class="col-lg-6">
        </div>
    </footer>
</div>
@endsection