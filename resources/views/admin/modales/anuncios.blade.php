<?php
$notificaciones = Auth::user()->Notifications

?>
@foreach (Auth::user()->unreadNotifications as $notificacion )
@if ($notificacion->data['evento'] == 'Anuncio')
<div class="alert alert-dismissible alert-{{$notificacion->data['tipo']}} alert-notify animated fadeInDown" role="alert" style="display: inline-block; margin: 0px auto; 
position: fixed; transition: all 0.5s ease-in-out 0s;
 z-index: 1080; top: 82%; left: 52%; right: 0px;
  animation-iteration-count: 1;">
  <span class="alert-icon ni ni-bell-55" data-notify="icon">
  </span>
  <div class="alert-text" div="">
    <span class="alert-title" data-notify="title">
      {{$notificacion->data['titulo']}}
    </span>
    <span data-notify="message">
      {{$notificacion->data['descripcion']}}
    </span>
  </div>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@endforeach