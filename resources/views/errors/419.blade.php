<!DOCTYPE html>
<html lang="es">
    <?php
    $page = Illuminate\Support\Facades\DB::table('settings-page')->select('*')->first();
    ?>
<head>
    <meta charset="utf-8">
    <title>Error 419</title>
     <!-- Favicon -->
     <link rel="icon" href="{{$page->logoisotipo}}" type="image/png">
    <link href='https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=hidden' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset("plantilla/css/faq/plugins.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("css/style-400.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("plantilla/bootstrap/css/bootstrap.css")}}" type="text/css">
</head>
<body class="error404 text-center">
    <div class="container-fluid  error-content">
        <div class="">
            <img alt="image-404" src="{{asset("images/errores/419.png")}}" class="img-cartoon">
            <h1 class="error-number">419</h1>
            <p class="error-des mb-0">Página expirada</p>
            <p class="error-text mb-4 mt-1">Perdón, su sesión ha expirado. Por favor recargue la página e intente nuevamente.</p>    
            <a href="{{url('home')}}" class="btn btn-gradient-info btn-rounded mt-4">Volver</a>
        </div>
    </div>    
</body>
</html> 