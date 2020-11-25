@extends('admin.layout')
@section('content')
<!-- CAPACITACIONES -->
<div class="header bg-primary pb-6" style="height: 100px;">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Capacitaciones</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Capacitaciones</li>
                        </ol>
                    </nav>

                </div>
            </div>



            <div class="container-fluid " style="margin-top: 11%">
                <div class="row">

@foreach ($capacitaciones as $item)
                    <div class="col-4"  style="margin-bottom:7% ">
                        <section class="section section-lg pt-lg-0 mt--7" style=" font-family: Roboto, Helvetica Neue, Arial, sans-serif;">
                            <div class="container">
                                <div class="row " <div class="col-lg-2">
                                    <div class="card bg-gradient-default" style="width:400px ;
                                        background: -prefix-linear-gradient(left top, #002A60, #0098C9) !important;
                                        background: linear-gradient(to bottom right, #002A60, #0098C9)!important;">

                                        <div class="card-body">
                                            <h1 class="card-title text-white">{{$item->titulo}}</h1>
                                            <h3 class="blockquote" style="font-size: 15px; margin-top: -25px">
                                            {{$item->fecha}}
                                            </h3>

                                            <blockquote class="blockquote text-white mb-0">
                                                <p>{{$item->descripcion}} </p>
                                                <br>
                                                <cite title="Source Title">{{$item->categoria}}</cite>

                                                <a href="{{$item->link}} " type="button" target="_blank" class="btn btn-primary mb-3"style="float: right;">
                                                <cite title="Source Title">acceder</cite>
                                                </a>
                                            </blockquote>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
@endforeach


                </div>

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
    @endsection

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