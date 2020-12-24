<!DOCTYPE html>
<html lang="en">
<?php
$page = Illuminate\Support\Facades\DB::table('settings-page')->select('*')->first();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>FAQ | Montechelo - Manual de usuarios </title>
    <link rel="icon" href="{{$page->logoisotipo}}" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700">
    <link rel="stylesheet" href="{{asset("plantilla/bootstrap/css/bootstrap.min.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("plantilla/css/faq/plugins.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("plantilla/css/faq.css")}}" type="text/css">
</head>

<body data-spy="scroll" data-target="#faq-list">

    <div id="headerWrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-12 text-center mb-sm-0 mb-3">
                    <a href="{{url("home")}}" class="navbar-brand-faq">
                        <img src="{{$page->logonav}}" class="img-fluid" alt="logo">
                    </a>
                </div>
                <div class="col-md-9 col-sm-12 col-12 text-center">
                    <h2 class="main-heading"><i class="flaticon-chat"></i> Intranet Montechelo</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div id="faqWrapper" class="mt-5">
            <div class="row">
                <div class="col-md-12">

                    <div class="row">

                        <div class="col-xl-4 col-lg-5 col-md-4 d-md-block  d-none col-sm-12 col-12">
                            <div class="d-lg-flex mx-lg-5">
                                <div id="faq-list" class="list-group faq-nav-list">
                                    <a href="{{url('home')}}" class="js-scroll-trigger list-group-item list-group-item-action mb-4" href="#list-item-1">
                                        <div class="media">
                                            <i class="flaticon-home-fill mr-2"></i>
                                            <div class="media-body">
                                                <h6 class="mt-0">Volver</h6>
                                                
                                            </div>
                                        </div>
                                    </a>
                                    
                                    <a class="js-scroll-trigger list-group-item list-group-item-action mb-4" href="#list-item-1">
                                        <div class="media">
                                            <i class="flaticon-star-fill mr-2"></i>
                                            <div class="media-body">
                                                <h6 class="mt-0">Manual de usuario</h6>
                                                <p>Manual orientado a los colaboladores.</p>
                                            </div>
                                        </div>
                                    </a>
                                    
                                    @if (Auth::user()->role == 'admin')
                                    <a class="js-scroll-trigger list-group-item list-group-item-action mb-4" href="#list-item-2">
                                        <div class="media">
                                            <i class="flaticon-gear-5 mr-2"></i>
                                            <div class="media-body">
                                                <h6 class="mt-0">Manual de administrador</h6>
                                                <p>Manual orientado a la parte administrativa.</p>
                                            </div>
                                        </div>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @include('admin.manual.previzualizaciones')
                        <div class="col-xl-8 col-lg-7 col-md-8 col-sm-12 col-12">
                            <div id="faq-content" class="scrollspy-example">
                                <div id="list-item-1" class="faq-section mb-5">
                                    <div class="faq-content-header">
                                        <i class="flaticon-star-fill mr-2"></i>
                                        <h3>Funcionalidades</h3>
                                        <p class="">Aquí encontrarás una breve explicación acerca de las funcionalidades de la intranet.</p>
                                    </div>
                                    <div id="faq-section-1" class="faq-container">
                                        <div class="card">
                                            <div class="card-header" id="faq-section-one-ques-1">
                                                <div class="mb-0 mt-0">
                                                    <div role="button" class="collapsed" data-toggle="collapse" data-target="#faq-section-one-ans-1" aria-expanded="false" aria-controls="faq-section-one-ans-1">
                                                        Dashboard | Perfil de usuario
                                                        <i class="flaticon-down-arrow float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="faq-section-one-ans-1" class="collapse" aria-labelledby="faq-section-one-ques-1" data-parent="#faq-section-1">
                                                <div class="card-body">
                                                    <p class="mb-4">
                                                        En el Dashboard encontrarás un acceso rápido a los módulos como lo son las noticias de intéres, de esta manera se obtien la información reciente de manera rápida.
                                                    </p>
                                                    <p class="mb-4">
                                                        En las imagenes de abajo te explicaremos algunas funcionalidades que podrían no ser intuitivas.
                                                        Empezando por el botón que se encuentra señalizado en la imagen, éste le permite al usuario aplicar
                                                        el modo oscuro en toda la aplicación para tener una mayor comodidad y todo por medio de un simple click.

                                                    </p>
                                                    <div class="faq-img text-center">
                                                      <a href="#" data-toggle="modal" data-target="#verimagen1">
                                                          <img alt="image-sample" src="{{asset("plantilla/img/manual/Captura1-Pic.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                        </a>  
                                                      <a href="#" data-toggle="modal" data-target="#verimagen2">
                                                          <img alt="image-sample" src="{{asset("plantilla/img/manual/Captura1-Dark.png")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                        </a>  
                                                    </div>
                                                    <p class="mb-4">
                                                        La aplicación cuenta con una barra de búsqueda que te permitira acceder a los módulos de la aplicación de
                                                        una manera rápida y sencilla, sólo debes dar  click o también  escribir el nombre del módulo al
                                                        que te quieras dirigir.

                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen3">
                                                        <img alt="image-sample" src="{{asset("plantilla/img/manual/Captura1-Barra-Pic.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 420px; height: 240px;">                                                        
                                                          </a>  
                                                    </div>
                                                    <p class="mb-4">
                                                        En el apartado superior derecho podrás encontrar el nombre con el que te registraste, dando click ahí podrás
                                                        ver un menú que te permitirá acceder al apartado de tu perfil dónde podrás actualizar tu información, ocultar
                                                        campos que no quieras mostrar, adicional a esto podrás cambiar tu foto de perfil y de portada, y por último
                                                        añadir una pequeña biografía acerca de ti para que los demás colaboladores conozcan un poco más sobre ti.

                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen4">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Captura1-Menu.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 420px; height: 240px;">                                           
                                                        </a>

                                                    </div>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen5">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Cap-Perfil.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">                                               
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#verimagen6">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Captura-Biografia.png")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">                                                
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faq-section-one-ques-2">
                                                <div class="mb-0 mt-0">
                                                    <div role="button" class="collapsed" data-toggle="collapse" data-target="#faq-section-one-ans-3" aria-expanded="false" aria-controls="faq-section-one-ans-3">
                                                        Chat Montechelo
                                                        <i class="flaticon-down-arrow float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="faq-section-one-ans-3" class="collapse" aria-labelledby="faq-section-one-ques-3" data-parent="#faq-section-1">
                                                <div class="card-body">
                                                    <p class="mb-4">
                                                        En el Chat Montechelo podrás enviar mensajes al resto de colaboladores y así mantenerte en comunicación constantemente.
                                                    </p>
                                                    <p class="mb-4">
                                                        En el chat podrás enviar imágenes, documentos y archivos facilitandote la tarea de compartir información sin necesidad de aplicaciones
                                                        externas.
                                                        Adicional a esto podrás marcar a otros colaboladores como "Favorito" para poder enviar mensajes de manera más ágil, también podrás
                                                        cambiar el color de tus chats y también podrás decidir si utilizar este módulo en modo oscuro para mejorar tu experiencia, todo esto con un simple click
                                                        como te mostramos en las imágenes de abajo.

                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen7">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Chat.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">                                                   
                                                        </a>                                                       
                                                        <a href="#" data-toggle="modal" data-target="#verimagen8">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Confi.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">                                                   
                                                        </a>
                                                    </div>
                                                    <p class="mb-4">
                                                        Te invitamos a descubrir más de sus funcionalidades.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="faq-section-one-ques-3">
                                                <div class="mb-0 mt-0">
                                                    <div role="button" class="collapsed" data-toggle="collapse" data-target="#faq-section-one-ans-4" aria-expanded="false" aria-controls="faq-section-one-ans-4">
                                                        Directorio de colaboladores
                                                        <i class="flaticon-down-arrow float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="faq-section-one-ans-4" class="collapse" aria-labelledby="faq-section-one-ques-4" data-parent="#faq-section-1">
                                                <div class="card-body">
                                                    <p class="mb-4">
                                                        En el Directorio podrás encontrar información de otros colaboladores y así poder mantenerte comunicado con ellos.
                                                    </p>
                                                    <p class="mb-4">
                                                       El directorio cuenta con la información de otros colaboladores, adicional a esto podrás acceder al perfil de cada uno de los
                                                       colaboladores y así ver la información de cada uno de ellos siempre y cuando sea visible, en las imágenes de abajo te mostramos como acceder.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen9">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Directorio.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 420px; height: 240px;">
                                                    
                                                        </a>

                                                    </div>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen10">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Captura2-Perfil.png")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#verimagen11">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Captura2-Biografia.png")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                    </div>
                                                    <p class="mb-4">
                                                       Adicional a esto, este módulo cuenta con una barra de búsqueda que te permitirá filtrar a los colaboladores por medio de su género, su nombre o su correo eléctronico.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen12">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Captura2-Nombre-Pic.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                        
                                                        <a href="#" data-toggle="modal" data-target="#verimagen13">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Captura2-Genero-Pic.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="faq-section-one-ques-4">
                                                <div class="mb-0 mt-0">
                                                    <div role="button" class="collapsed" data-toggle="collapse" data-target="#faq-section-one-ans-5" aria-expanded="false" aria-controls="faq-section-one-ans-5">
                                                        Módulo Talento Humano
                                                        <i class="flaticon-down-arrow float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="faq-section-one-ans-5" class="collapse" aria-labelledby="faq-section-one-ques-5" data-parent="#faq-section-1">
                                                <div class="card-body">
                                                    <p class="mb-4">
                                                        En el módulo de talento humano encontrarás un apartado de noticias, capacitaciones y pausas activas.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen14">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Captura3.png")}}" class="img-fluid mb-4 mt-4" style="width: 420px; height: 240px;">                                                  
                                                        </a>

                                                    </div>
                                                    <p class="mb-4">
                                                        En el apartado de Noticias de Intéres tendrás la oportunidad de ver las últimas publicaciones realizadas por las distintas áreas,
                                                        podrás publicar nuevas noticias siempre y cuando tu rol te lo permita, podrás realizar comentarios gracias al complemento Disqus,
                                                        además aquellas noticias que publiques se podrán editar.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen15">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Captura3-Noticia.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#verimagen16">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Captura3-Noticia-Usu3.png")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                    </div>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen17">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Captura3-Post-Pic.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#verimagen18">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Captura3-Post-1.png")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="faq-section-one-ques-6">
                                                <div class="mb-0 mt-0">
                                                    <div role="button" class="collapsed" data-toggle="collapse" data-target="#faq-section-one-ans-6" aria-expanded="false" aria-controls="faq-section-one-ans-6">
                                                        Repositorio de archivos
                                                        <i class="flaticon-down-arrow float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="faq-section-one-ans-6" class="collapse" aria-labelledby="faq-section-one-ques-6" data-parent="#faq-section-1">
                                                <div class="card-body">
                                                    <p class="mb-4">
                                                        En el apartado de Repositorio de archivos podrás subir y compartir archivos con los demás colaboladores.
                                                    </p>
                                                    <p class="mb-4">
                                                       Tendrás la oportunidad de crear carpetas, subir archivos, copiar, editar, descargar y eliminar los archivos que decidas subir.
                                                       Adicional a esto si quieres ahorrar espacio podrás comprimir los archivos subidos, así podrás tener mayor comodidad
                                                       sin dejar de compartir información.
                                                       Tendrás a la mano información relacionada con la empresa, desde manuales, registros y formatos, facilitando así tu trabajo
                                                       del día a día.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen19">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Repo.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#verimagen20">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Repo2.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="faq-section-one-ques-7">
                                                <div class="mb-0 mt-0">
                                                    <div role="button" class="collapsed" data-toggle="collapse" data-target="#faq-section-one-ans-7" aria-expanded="false" aria-controls="faq-section-one-ans-7">
                                                        Calendario de eventos
                                                        <i class="flaticon-down-arrow float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="faq-section-one-ans-7" class="collapse" aria-labelledby="faq-section-one-ques-7" data-parent="#faq-section-1">
                                                <div class="card-body">
                                                    <p class="mb-4">
                                                       En el apartado de calendario podrás crear eventos personales o realizar recordatorios, también podrás ver los próximos cumpleaños de los colaboladores y los eventos programados.
                                                    </p>
                                                    <p class="mb-4">
                                                        Adicionalmente podrás editar los eventos que crees y podrás seleccionar si ver los eventos que hay en el mes, en la semana o en el día.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen21">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Calendario.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 420px; height: 240px;">
                                                    
                                                        </a>

                                                    </div>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen22">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Calendario1.png")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                        
                                                        <a href="#" data-toggle="modal" data-target="#verimagen23">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Calendario3.png")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faq-section-one-ques-8">
                                                <div class="mb-0 mt-0">
                                                    <div role="button" class="collapsed" data-toggle="collapse" data-target="#faq-section-one-ans-8" aria-expanded="false" aria-controls="faq-section-one-ans-8">
                                                        Solicitudes y Trámites
                                                        <i class="flaticon-down-arrow float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="faq-section-one-ans-8" class="collapse" aria-labelledby="faq-section-one-ques-8" data-parent="#faq-section-1">
                                                <div class="card-body">
                                                    <p class="mb-4">
                                                       En el apartado de solicitudes y trámites podrás realizar solicitudes para vacaciones y permisos, adicional a esto con un simple click podrás descargar tus certificados laborales y de nómina.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen24">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Solicitudes.png")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                        
                                                        <a href="#" data-toggle="modal" data-target="#verimagen25">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Solicitudes1.png")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faq-section-one-ques-9">
                                                <div class="mb-0 mt-0">
                                                    <div role="button" class="collapsed" data-toggle="collapse" data-target="#faq-section-one-ans-9" aria-expanded="false" aria-controls="faq-section-one-ans-9">
                                                        Buzón de sugerencias
                                                        <i class="flaticon-down-arrow float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="faq-section-one-ans-9" class="collapse" aria-labelledby="faq-section-one-ques-9" data-parent="#faq-section-1">
                                                <div class="card-body">
                                                    <p class="mb-4">
                                                       Aquí podrás realizar sugerencias, reclamos y/o felicitaciones.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen26">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Sugerencia.png")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                        
                                                        <a href="#" data-toggle="modal" data-target="#verimagen27">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Sugerencia1.png")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faq-section-one-ques-10">
                                                <div class="mb-0 mt-0">
                                                    <div role="button" class="collapsed" data-toggle="collapse" data-target="#faq-section-one-ans-10" aria-expanded="false" aria-controls="faq-section-one-ans-10">
                                                        Novedades
                                                        <i class="flaticon-down-arrow float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="faq-section-one-ans-10" class="collapse" aria-labelledby="faq-section-one-ques-10" data-parent="#faq-section-1">
                                                <div class="card-body">
                                                    <p class="mb-4">
                                                        En el apartado de Novedades podrás reportar fallos e imprevistos que puedan surgir ya sea la falla de un módulo o daños en la aplicación, todo esto por medio de un formulario.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen28">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Novedades.png")}}" class="img-fluid mb-4 mt-4" style="width: 420px; height: 240px;">
                                                    
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if (Auth::user()->role == 'admin')
                                <div id="list-item-2" class="faq-section mb-5">
                                    <div class="faq-content-header">
                                        <i class="flaticon-gear-5 mr-2"></i>
                                        <h3>Manual administrativo</h3>
                                        <p class="">Aquí encontrarás información relevante de la parte administrativa de la intranet. </p>
                                    </div>

                                    <div id="faq-section-2" class="faq-container">

                                        <div class="card">
                                            <div class="card-header" id="faq-section-two-ques-1">
                                                <div class="mb-0 mt-0">
                                                    <div role="button" class="collapsed" data-toggle="collapse" data-target="#faq-section-two-ans-1" aria-expanded="true" aria-controls="faq-section-two-ans-1">
                                                        Dashboard | Gestión de usuarios - Permisos
                                                        <i class="flaticon-down-arrow float-right"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="faq-section-two-ans-1" class="collapse" aria-labelledby="faq-section-two-ques-1" data-parent="#faq-section-2">
                                                <div class="card-body">
                                                    <p class="mb-4">
                                                        En este apartado encontrarás un pequeño registro de los módulos de la intranet, de esta manera tendrás un resumen de los registros realizados en cada uno de los módulos de la intranet.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen29">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Dash.png")}}" class="img-fluid mb-4 mt-4" style="width: 420px; height: 240px;">
                                                    
                                                        </a>

                                                    </div>
                                                    <p class="mb-4">
                                                       Adicional a esto tendrás la oportunidad de gestionar a los usuarios registrados, asignar permisos y crear nuevos roles.
                                                       En las imágenes de abajo te mostraremos como realizar estás funciones. El apartado de usuarios cuenta con un elemento llamado listas y otro llamado Permisos
                                                       que le permitirá al admnistrador realizar sus respectiva gestión, limitando así el acceso a los módulos dependiendo
                                                       del rol asignado.
                                                    </p>

                                                    <p class="mb-4">
                                                        Aquí podemos observar el apartado del menú llamado "Listas" que contiene la lista de usuarios y permite su gestión.
                                                        Cada módulo cuenta con widgets que permiten mantener un conteo y una vista general de cada función que es realizada por los usuarios, en este caso cuenta con información acerca de los usuarios
                                                        registrados, ejemplo, cuantos usuarios registrados con el género "Mujer" hay en la intranet.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen30">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Usu1.png")}}" class="img-fluid mb-4 mt-4" style="width: 420px; height: 240px;">
                                                    
                                                        </a>

                                                    </div>
                                                    <p class="mb-4">
                                                       Adicionalmente cuenta con un apartado de gestión que muestra los usuarios que han sido registrados, el apartado de gestión tiene un apartado para crear nuevos usuarios, editar la información  y eliminar a los usuarios deseados.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen31">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Usu3.png")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#verimagen32">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Usu4.png")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                    </div>
                                                    <p class="mb-4">
                                                        Aquí podemos observar el apartado del menú llamado "Permisos" que contiene la lista de roles que hay en el sistema y permite gestionar el acceso a los módulos de la intranet.
                                                        Esto cuenta con una lista de los roles que están disponibles en la intranet, permitiendo gestionar los permisos de cada uno de ellos y también cuenta con la posibilidad de crear un nuevo rol.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen33">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Usu5.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 420px; height: 240px;">
                                                    
                                                        </a>

                                                    </div>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen34">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Usu8.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#verimagen35">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Usu9.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="faq-section-two-ques-3">
                                                <div class="mb-0 mt-0">
                                                    <div role="button" class="collapsed" data-toggle="collapse" data-target="#faq-section-two-ans-3" aria-expanded="false" aria-controls="faq-section-two-ans-3">
                                                        Novedades
                                                        <i class="flaticon-down-arrow float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="faq-section-two-ans-3" class="collapse" aria-labelledby="faq-section-two-ques-3" data-parent="#faq-section-2">
                                                <div class="card-body">
                                                    <p class="mb-4">
                                                        En este apartado encontrarás un registro de las novedades realizadas por los usuarios y su respectiva gestión.
                                                        Este elemento cuenta con widgets que permiten saber cuantas novedades fueron realizadas y tienen un estado en especifico, un ejemplo sería
                                                        cuantas novedades no han sido revisadas y se encuentra con el estado "Pendiente". Esta información se actualizará conforme se registren nuevas novedades
                                                        o cuando se realize una actualización por parte del administrador.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen36">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Nove1.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 420px; height: 240px;">
                                                    
                                                        </a>

                                                    </div>
                                                    <p class="mb-4">
                                                        Adicional a esto, este elemento cuenta con la opción de crear una nueva novedad, editar las novedades y eliminarlas.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen37">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Nove1.png")}}" class="img-fluid mb-4 mt-4" style="width: 420px; height: 240px;">
                                                    
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="faq-section-two-ques-4">
                                                <div class="mb-0 mt-0">
                                                    <div role="button" class="collapsed" data-toggle="collapse" data-target="#faq-section-two-ans-4" aria-expanded="false" aria-controls="faq-section-two-ans-4">
                                                        Solicitudes
                                                        <i class="flaticon-down-arrow float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="faq-section-two-ans-4" class="collapse" aria-labelledby="faq-section-two-ques-4" data-parent="#faq-section-2">
                                                <div class="card-body">
                                                    <p class="mb-4">
                                                        En este apartado encontrarás un registro de las solicitudes realizadas por los usuarios y su respectiva gestión.
                                                        Este elemento cuenta con widgets que permiten saber cuantas solicitudes fueron realizadas y tienen un estado en especifico, un ejemplo sería
                                                        cuantas solicitudes no han sido revisadas y se encuentra con el estado "Pendiente". Esta información se actualizará conforme se registren nuevas solicitudes
                                                        o cuando se realize una actualización por parte del administrador.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen38">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Soli.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 420px; height: 240px;">
                                                    
                                                        </a>

                                                    </div>
                                                    <p class="mb-4">
                                                        Adicional a esto, este elemento cuenta con la opción realizar una nueva solicitud, editar las solicitudes creadas previamente y eliminarlas.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen39">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Soli1.png")}}" class="img-fluid mb-4 mt-4" style="width: 420px; height: 240px;">
                                                    
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faq-section-two-ques-5">
                                                <div class="mb-0 mt-0">
                                                    <div role="button" class="collapsed" data-toggle="collapse" data-target="#faq-section-two-ans-5" aria-expanded="false" aria-controls="faq-section-two-ans-5">
                                                        Buzón
                                                        <i class="flaticon-down-arrow float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="faq-section-two-ans-5" class="collapse" aria-labelledby="faq-section-two-ques-5" data-parent="#faq-section-2">
                                                <div class="card-body">
                                                    <p class="mb-4">
                                                       En este apartado encontrás un registro de las sugerencias realizadas por los usuarios, estas no podrán editarse o actualizarse y sólo tendran la opción de eliminarse.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen40">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Buz.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 420px; height: 240px;">
                                                    
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faq-section-two-ques-6">
                                                <div class="mb-0 mt-0">
                                                    <div role="button" class="collapsed" data-toggle="collapse" data-target="#faq-section-two-ans-6" aria-expanded="false" aria-controls="faq-section-two-ans-6">
                                                        Eventos
                                                        <i class="flaticon-down-arrow float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="faq-section-two-ans-6" class="collapse" aria-labelledby="faq-section-two-ques-6" data-parent="#faq-section-2">
                                                <div class="card-body">
                                                    <p class="mb-4">
                                                        En este apartado encontrás un registro de los eventos realizados por los usuarios, estas  podrán editarse o actualizarse, podrán visualizarse los eventos creados y se podrán crear nuevos eventos.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen41">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Event.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#verimagen42">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Event1.png")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faq-section-two-ques-7">
                                                <div class="mb-0 mt-0">
                                                    <div role="button" class="collapsed" data-toggle="collapse" data-target="#faq-section-two-ans-7" aria-expanded="false" aria-controls="faq-section-two-ans-7">
                                                        Noticias
                                                        <i class="flaticon-down-arrow float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="faq-section-two-ans-7" class="collapse" aria-labelledby="faq-section-two-ques-7" data-parent="#faq-section-2">
                                                <div class="card-body">
                                                    <p class="mb-4">
                                                        En este apartado encontrás un registro de las publicaciones realizadas por los usuarios, estas  podrán editarse o actualizarse,se podrán eliminar las publicaciones creadas y se podrán crear nuevas publicaciones.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen43">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Not.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 420px; height: 240px;">
                                                    
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faq-section-two-ques-8">
                                                <div class="mb-0 mt-0">
                                                    <div role="button" class="collapsed" data-toggle="collapse" data-target="#faq-section-two-ans-8" aria-expanded="false" aria-controls="faq-section-two-ans-8">
                                                        Configuración General del Sitio
                                                        <i class="flaticon-down-arrow float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="faq-section-two-ans-8" class="collapse" aria-labelledby="faq-section-two-ques-8" data-parent="#faq-section-2">
                                                <div class="card-body">
                                                    <p class="mb-4">
                                                        En este apartado, podrás actualizar la información del sitio de manera rápida y sencilla sin tener que hacer uso del código.
                                                    </p>
                                                    <p class="mb-4">
                                                        Se podrá actualizar las imágenes e iconos del sitio web con un simple click, en las imágenes te mostramos como.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen45">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Conf1.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 420px; height: 240px;">
                                                    
                                                        </a>

                                                    </div>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen46">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Conf2.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#verimagen47">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Conf3.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                    </div>

                                                    <p class="mb-4">
                                                        Adicionalmente este apartado cuenta con la opción de cambiar los colores del sitio, haciendo más agradable la personalización del mismo.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen48">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Conf4.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#verimagen49">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Conf5.png")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                    </div>

                                                    <p class="mb-4">
                                                        Y por último cuenta con la posibilidad de editar los textos utilizados, en este caso la página de plan estratégico.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen50">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Conf6.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 420px; height: 240px;">
                                                    
                                                        </a>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faq-section-two-ques-9">
                                                <div class="mb-0 mt-0">
                                                    <div role="button" class="collapsed" data-toggle="collapse" data-target="#faq-section-two-ans-9" aria-expanded="false" aria-controls="faq-section-two-ans-9">
                                                        Logs del sistema
                                                        <i class="flaticon-down-arrow float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="faq-section-two-ans-9" class="collapse" aria-labelledby="faq-section-two-ques-9" data-parent="#faq-section-2">
                                                <div class="card-body">
                                                    <p class="mb-4">
                                                        En este apartado, encontrarás los logs (registros) de errores del sistema, facilitando así la solución de los mismos y ahorrando tiempo en encontrar los errores.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen51">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Log.png")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#verimagen52">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Log1.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                    
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faq-section-two-ques-10">
                                                <div class="mb-0 mt-0">
                                                    <div role="button" class="collapsed" data-toggle="collapse" data-target="#faq-section-two-ans-10" aria-expanded="false" aria-controls="faq-section-two-ans-10">
                                                        Anuncios
                                                        <i class="flaticon-down-arrow float-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="faq-section-two-ans-10" class="collapse" aria-labelledby="faq-section-two-ques-10" data-parent="#faq-section-2">
                                                <div class="card-body">
                                                    <p class="mb-4">
                                                        En este apartado, tendrás la posbilidad de realizar anuncios para los distintos usuarios, este módulo también cuenta con un registro de anuncis y con su respectiva gestión.
                                                    </p>
                                                    <div class="faq-img text-center">
                                                        <a href="#" data-toggle="modal" data-target="#verimagen53">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Anun.jpg")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">                                                    
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#verimagen54">
                                                            <img alt="image-sample" src="{{asset("plantilla/img/manual/Anun1.png")}}" class="img-fluid mb-4 mt-4" style="width: 310px; height: 180px;">
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="{{asset("plantilla/js/libs/jquery-3.1.1.min.js")}}"></script>
    <script src="{{asset("plantilla/bootstrap/js/popper.min.js")}}"></script>
    <script src="{{asset("plantilla/bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("plantilla/js/faq.js")}}"></script>
</body>
</html>

