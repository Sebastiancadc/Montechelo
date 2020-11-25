
@extends('admin.layout')
@section('content')
<!-- BUZON DE SUGERENCIAS -->
<div class="header bg-primary pb-6" style="height: 100px;">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Buzon de sugerencias</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Buzon</li>
                </ol>
              </nav>
            </div>
                <br>
                <div class="col-lg-6 col-5 text-right">
                <a href="{{ url('crearbuzon')}}" class="btn btn-sm btn-neutral">Agregar</a>

                </div>
            </div>
    </div>
</div>
@if (session('buzon_crear'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <span class="alert-icon"><i class="ni ni-like-2"></i></span>
  <span class="alert-text" data-toggle="notify" data-placement="top" data-align="center" data-type="danger" data-icon="ni ni-bell-55" ><strong></strong>{{session('buzon_crear')}}</span>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<br><br><br>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">

            <section class="py-6 pb-9 bg-default" style="background: linear-gradient( rgba(231, 223, 223, 0), rgb(255, 255, 255)),url({{asset("plantilla/img/theme/bb.jpg")}}); height: 300px;">
                <div class="row justify-content-center text-center">
                    <div class="col-md-6">

                        <p class="lead text-white"> </p>

                    </div>
                </div>
            </section>

            <section class="section section-lg pt-lg-0 mt--7" style=" font-family: Roboto, Helvetica Neue, Arial, sans-serif;">
                <div class="container">
                    <div class="row justify-content-center"
                        <div class="col-lg-12">
                            <div class="row" >
                                @foreach ($buzon as $item)
                                <div class="col-lg-4">
                                    <div class="card card-lift--hover shadow border-0">

                                        <div class="card-body py-5 rounded-sm"  style="background: rgba(255,255,255,1);
                                        background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(240,234,240,1) 100%);
                                        background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,1)), color-stop(100%, rgba(240,234,240,1)));
                                        background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(240,234,240,1) 100%);
                                        background: -o-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(240,234,240,1) 100%);
                                        background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(240,234,240,1) 100%);
                                        background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(240,234,240,1) 100%);
                                        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f0eaf0', GradientType=0 );
                                        -webkit-box-shadow: -13px 13px 18px -10px rgba(0,0,0,0.51);
                                        -moz-box-shadow: -13px 13px 18px -10px rgba(0,0,0,0.51);
                                        box-shadow: -13px 13px 18px -10px rgba(0,0,0,0.51);
                                        ">
                                            <h4>{{$item->tipo_sugerencia}}</h4>
                                            <p class="description mt-3" style="text-align: justify;">{{$item->descripcion}}</p>
                                            <h4 style="color:#0098C9 ">{{$item->area}}</h4>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
    {{-- Modal llenar campos --}}
@if (Auth::User()->phone == '')
<div class="col-lg-10">
  <div class="modal fade" id="modaLlenarcampos" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modal-dialog-centered modal-" role="document">
    <div class="modal-content ">       
        <div class="modal-header">
         <span aria-hidden="true"></span>
        </div>
        <div class="modal-body"> 
         <p>Por favor termine el registro para poder ingresar</p>                      
     </div>
        <div class="modal-footer">
           <a href="{{ url('perfil')}}" class="btn btn-white">¡Vamos!</a>
         </div>   
       </div>
</div>
</div>
</div>
@endif
{{-- fin modal llenar campos --}}
</div>
@section('js')

<script>
    $(document).ready(function()
    {
       $("#modaLlenarcampos").modal("show");
    });
  </script> 
  <script src="https://cdn.rawgit.com/jackmoore/colorbox/master/jquery.colorbox-min.js"></script>
  <script>
  setTimeout(function(){
  $.colorbox({
  html:"<video width='750' height='540' autoplay controls> <source src="+ videoaleatoire()+" type='video/mp4'> </video>",
  clasName: 'cboxWrapper',
  width: 750,
  height: 550
  });
  }, 3000);
  </script>
  <script>
    function makeArray(n) {
    this.length = n;
    for (var i=1; i<=n; i++) {
    this[i] = "";
    }
    return this;
    }
    var i;
    function videoaleatoire() {
    i = Math.floor(6 * Math.random() + 1);
    return video[i];
    }
    video = new makeArray(6);
    video[1]="pausasacitvas/PausaA.mp4";
    video[2]="pausasacitvas/PausaA2.mp4";
    video[3]="pausasacitvas/PausaA3.mp4";
    video[4]="pausasacitvas/PausaA4.mp4";
    video[5]="pausasacitvas/PausaA5.mp4";
    video[6]="pausasacitvas/PausaA6.mp4";
    </script>
  </body>
  <style>
  
    #cboxContent {
        background: black;
        /* overflow: hidden; */
    }
    .cboxWrapper{
      overflow: visible;
    }
    #cboxClose {
      margin-top: 5px;
      -ms-user-select: none;
      color: #f8f9fe;
      border: 1px solid #5e72e4;
      border-radius: .25rem;
      background-color: #5e72e4;
      height: 31px;
      width: 70px;    
  }
  </style>
@endsection
@endsection
