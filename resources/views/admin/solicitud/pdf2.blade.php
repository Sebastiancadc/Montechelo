<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificado de nómina</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Certificado de Nómina</h2>
        <p>A quien le concierna:</p>
        <p>Montechelo:</p>
        <p>
            Certifica que <span class="text-muted">{{Auth::user()->name}}{{Auth::user()->lastname}}</span> quien trabaja en el área de <span class="text-muted">{{Auth::user()->area}},
            trabaja 50 horas semanales en la modalidad de trabajo virtual.
        </p>
        <p>
         En caso de  presentar dudas o requerir más información por favor comuniquese a los números de atención.
        </p>
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>