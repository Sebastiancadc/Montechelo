@extends('admin.layouts.layout')
@section('content')

<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Notificaciones</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page">Mis notificaciones</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row justify-content-center">
    <div class="col-lg-8 card-wrapper">
      <!-- Modals -->
      <div class="card">
        <div class="card-header">
          <h2 class="mb-0">Lista</h2>

        </div>
        <div class="card-body">
          @if (Auth::user()->Notifications)
          <a href="{{route('leertodas')}}" class="btn btn-sm btn-warning mb-2" style="margin-left: 63%;
            margin-top: -15px;">Marcar todas como leidas</a>
          @else
          @endif
          <div class="row">
            @forelse ($notificaciones as $notificacion)
            <div class="col-md-12">
              <a href="{{$notificacion->data['link']}}" class="list-group-item list-group-item-action">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <i class="ni {{$notificacion->data['icono']}}" style="font-size: 23px;"></i>
                  </div>
                  <div class="col ml--2">
                    <div class="d-flex justify-content-between align-items-center">
                      <div>
                        <h4 class="mb-0 text-sm">{{$notificacion->data['evento']}} - {{$notificacion->data['titulo']}}</h4>
                      </div>
                      <div class="text-right text-muted">
                        <small>{{$notificacion->created_at->diffForHumans() }}</small>
                      </div>
                    </div>
                    <p class="text-sm mb-0">{{$notificacion->data['descripcion']}}</p>
                  </div>
                </div>
              </a>
            </div>
            @empty
            <div class="col-md-12">
              <a class="list-group-item list-group-item-action">
                <div class="row align-items-center">
                  <div class="col-auto">
                  </div>
                  <div class="col ml--2">
                    <div class="d-flex justify-content-between align-items-center">
                      <div>
                        <h4 class="mb-0 text-sm"></h4>
                      </div>
                      <div class="text-right text-muted">
                        <small></small>
                      </div>
                    </div>
                    <p class="text-sm mb-0">No tiene notificaciones</p>
                  </div>
                </div>
              </a>
            </div>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection