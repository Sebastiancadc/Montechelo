
@extends('admin.layout')
@section('content')

<!-- PLAN ESTRATEGICO -->
<div class="header bg-primary pb-6" style="height: 100px;">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Plan estrategico</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Plan estrategico</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">

                <section class="py-6 pb-9 bg-default" style="background:
                linear-gradient( rgba(231, 223, 223, 0), rgba(255, 255, 255, 0.527)),
                url({{asset("plantilla/img/theme/hhh.png")}}); height: 400px;">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-6">

                            <p class="lead text-white"></p>
                        </div>
                    </div>
                </section>

                <section class="section section-lg pt-lg-0 mt--7" style=" font-family: Roboto, Helvetica Neue, Arial, sans-serif;">

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">

                                <div class="row">

                                    <div class="col-lg-4" >
                                        <div class="card card-lift--hover shadow border-0" >
                                            <div class="card-body py-5" style="-webkit-box-shadow: -10px 10px 19px 5px rgba(88,154,252,0.42);
                                            -moz-box-shadow: -10px 10px 19px 5px rgba(88,154,252,0.42);
                                            box-shadow: -10px 10px 19px 5px rgba(88,154,252,0.42);">
                                                <h4 class="h3 text-primary text-uppercase" style="text-align: center;">Mision</h4>
                                                <p class="description mt-3" style="text-align: justify; ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa necessitatibus ut, temporibus quo tenetur fuga, corrupti repellat maiores, inventore modi illum fugit deserunt aliquam praesentium quae. Cumque beatae perspiciatis nobis.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="card card-lift--hover shadow border-0" >
                                            <div class="card-body py-5" style="-webkit-box-shadow: 0px 13px 19px 5px rgba(88,154,252,0.42);
                                            -moz-box-shadow: 0px 13px 19px 5px rgba(88,154,252,0.42);
                                            box-shadow: 0px 13px 19px 5px rgba(88,154,252,0.42); ">
                                                <h4 class="h3 text-primary text-uppercase" style="text-align: center;">Valores</h4>
                                                <p class="description mt-3" style="text-align: justify; ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa necessitatibus ut, temporibus quo tenetur fuga, corrupti repellat maiores, inventore modi illum fugit deserunt aliquam praesentium quae. Cumque beatae perspiciatis nobis.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="card card-lift--hover shadow border-0">
                                            <div class="card-body py-5" style="-webkit-box-shadow: 10px 10px 19px 5px rgba(88,154,252,0.42);
                                            -moz-box-shadow: 10px 10px 19px 5px rgba(88,154,252,0.42);
                                            box-shadow: 10px 10px 19px 5px rgba(88,154,252,0.42);">
                                                <h4 class="h3 text-primary text-uppercase" style="text-align: center;">Vision</h4>
                                                <p class="description mt-3" style="text-align: justify; ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa necessitatibus ut, temporibus quo tenetur fuga, corrupti repellat maiores, inventore modi illum fugit deserunt aliquam praesentium quae. Cumque beatae perspiciatis nobis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
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