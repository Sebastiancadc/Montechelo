<!DOCTYPE html>
<html lang="es">
<?php
$page = Illuminate\Support\Facades\DB::table('settings-page')->select('*')->first();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cerrando sesion</title>
      <!-- Favicon -->
  <link rel="icon" href="{{$page->logoisotipo}}" type="image/png">
  <link rel="stylesheet" href="{{asset("css/logout.css")}}" type="text/css">
</head>

 <div class='body'>
    <span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </span>
    <div class='base'>
      <span></span>
      <div class='face'></div>
    </div>
  </div>
  <div class='longfazers'>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <h1>Cerrando sesion...</h1>
 <script>
     function redireccionar(){
  window.location.href = "http://localhost/Montechelo/public/";
}
setTimeout("redireccionar()", 2000);
 </script>
</html>