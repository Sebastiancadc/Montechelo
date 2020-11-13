@extends('admin.layout')
@section('content')

<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Editar capacitacion</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{asset('admin/capacitaciones')}}">capacitacion</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Editar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--6">

    <div class="row justify-content-center">

        <div class="col-lg-6">

            <div class="card-wrapper">

                <div class="card">
                    
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Editar capacitacion</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">

                        <form action="{{route('update',$capacitacionActualizar->id_capacitacion)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">

                                    <input class="form-control" placeholder="Titulo" value='{{$capacitacionActualizar->titulo}}' name="titulo" type="text" required>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                    </div>
                                    <input class="form-control" name="fecha" value='{{$capacitacionActualizar->fecha}}' type="date" required>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">

                                    <textarea class="form-control" name="descripcion" type="text" cols="100" rows="5" required>{{$capacitacionActualizar->descripcion}}</textarea>
                                </div>
                            </div>
                            


                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">

                                    <select class="form-control" id="exampleFormControlSelect1" name="categoria" required>

                                        <option>{{$capacitacionActualizar->categoria}}</option>
                                        <option>Diseño</option>
                                        <option>Desarrollo</option>
                                        <option>Software</option>
                                        <option>Analisis</option>
                                        <option>Produccion</option>
                                    </select> </div>
                            </div>

                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <input class="form-control" placeholder="Link" value='{{$capacitacionActualizar->link}}' name="link" id="link" type="text" required >
                                </div>
                            </div>



                            <button type="submit" class="btn btn-primary my-4" style="margin-left: 85% !important">Editar</button>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
