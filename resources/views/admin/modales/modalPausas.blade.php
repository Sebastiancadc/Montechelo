{{-- Modal pausaActiva --}}
<div class="modal-dialog modal-lg">
  <div class="modal fade" id="modalPausaActiva" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog  modal-lg" role="document" style="max-width: 633px;">
      <div class="modal-content " style="box-shadow: 0 15px 35px rgb(0 0 0 / 0%), 0 5px 15px rgb(0 0 0 / 0%);background-color: #fff0;">
        <div class="modal-body" style="box-shadow: 0 15px 35px rgb(0 0 0 / 0%), 0 5px 15px rgb(0 0 0 / 0%);background-color: #fff0;">
          <video width='880' height='450' autoplay controls muted>
            <source src="{{$pausasramdom->video}}" type='video/mp4'> </video>
        </div>
        <div class="modal-footer" style="margin-right: 456px;margin-top: -52px;">
          <button class="btn btn-danger ml-auto" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- fin modal llenar pausaActiva --}}