@extends('admin.layouts.layout')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Noticias</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Noticia publicada</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ url('noticiausu') }}" class="btn btn-sm btn-neutral">Volver</a>
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
    <div class="col-md-15">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h5 class="h3 mb-0">{{ $noticia->title }}</h5>
                </div>
                <div class="card-header d-flex align-items-center">
                        <div class="d-flex align-items-center">
                        <a href="#">
                            <img src="{{ $noticia->user->photo }}" class="avatar">
                        </a>
                        <div class="mx-3">
                            <h4 class="mb-0">
                                <a>{{$noticia->user->name}} {{$noticia->user->lastname}}</a>
                            </h4>
                            <small class="d-block text-muted">{{ $noticia->created_at->format('d/m/Y') }}</small>
                        </div>
                        </div>
                        <div class="text-right ml-auto">
                            @if($noticia->user->id == Auth::User()->id)
                        <a href="{{route('editarnoticia', $noticia->Id_noticia)}}" type="button" class="btn btn-sm btn-primary btn-icon">
                            <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                            <span class="btn-inner--text">Editar</span>
                            @endif
                        </a>
                        </div>
                    </div>
                <div class="card-body">
                    <p class="mb-4">
                        {{ $noticia->body }}
                    </p>
                    <img alt="Image placeholder" src="{{ $noticia->image }}" class="img-fluid rounded" style="margin-left: 260px; margin-right: 260px; width: 477px; heightmin-width: ;min-width: 474px;">
                    <div class="row align-items-center my-3 pb-3 border-bottom">
                    <div class="col-sm-6">
                    </div>
                    </div>
                    <!-- Comments -->
                    <div class="mb-1">
                        <div id="disqus_thread"></div>
                        <script>
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://montechelo-prueba.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                        </script>
                        <noscript><a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>
@endsection
