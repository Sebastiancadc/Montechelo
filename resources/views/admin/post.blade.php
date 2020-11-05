@extends('admin.layout')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Directorio</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Directorio</li>
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
                            <img src="{{asset("plantilla/img/theme/team-1.jpg")}}" class="avatar">
                        </a>
                        <div class="mx-3">
                            <a href="#" class="text-dark font-weight-600 text-sm">{{ $noticia->user->name }}</a>
                            <small class="d-block text-muted">{{ $noticia->created_at->format('d/m/Y') }}</small>
                        </div>
                        </div>
                        <div class="text-right ml-auto">
                        <button type="button" class="btn btn-sm btn-primary btn-icon">
                            <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                            <span class="btn-inner--text">Follow</span>
                        </button>
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
                    <div class="col-sm-6 d-none d-sm-block">
                        <div class="d-flex align-items-center justify-content-sm-end">
                        <div class="avatar-group">
                            <a href="#" class="avatar avatar-xs rounded-circle" data-toggle="tooltip" data-original-title="Jessica Rowland">
                            <img alt="Image placeholder" src="{{asset("plantilla/img/theme/team-1.jpg")}}" class="rounded-circle">
                            </a>
                            <a href="#" class="avatar avatar-xs rounded-circle" data-toggle="tooltip" data-original-title="Audrey Love">
                            <img alt="Image placeholder" src="{{asset("plantilla/img/theme/team-2.jpg")}}" class="rounded-circle">
                            </a>
                            <a href="#" class="avatar avatar-xs rounded-circle" data-toggle="tooltip" data-original-title="Michael Lewis">
                            <img alt="Image placeholder" src="{{asset("plantilla/img/theme/team-3.jpg")}}" class="rounded-circle">
                            </a>
                        </div>
                        <small class="pl-2 font-weight-bold">and 30+ more</small>
                        </div>
                    </div>
                    </div>
                    <!-- Comments -->
                    <div class="mb-1">
                        <div id="disqus_thread"></div>
                        <script>

                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://montechelo-prueba.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


                    </div>
                </div>
           </div>
        </div>
    </div>
</div>
@endsection
