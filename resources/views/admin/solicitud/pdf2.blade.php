<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificado de nómina</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
            En caso de presentar dudas o requerir más información por favor comuniquese a los números de atención.
        </p>
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
<style>
    body {
        margin: 0;
        font-family: Nunito, sans-serif;
        font-size: .9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #212529;
        text-align: left;
        background-color: #f8fafc;
    }

    }

    .mt-5,
    .my-5 {
        margin-top: 3rem !important;
    }

    @media (min-width: 1200px) .container {
        max-width: 1140px;
    }

    @media (min-width: 992px) .container {
        max-width: 960px;
    }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    .text-center {
        text-align: center !important;
    }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
    }

    .text-center {
        text-align: center !important;
    }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
    }

    .h2,
    h2 {
        font-size: 1.8rem;
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-bottom: .5rem;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.2;
        color: inherit;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-top: 0;
        margin-bottom: .5rem;
    }

    .h2,
    h2 {
        font-size: 2rem;
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-bottom: .5rem;
        font-weight: 500;
        line-height: 1.2;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-top: 0;
        margin-bottom: .5rem;
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    h2 {
        display: block;
        font-size: 1.5em;
        margin-block-start: 0.83em;
        margin-block-end: 0.83em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        font-weight: bold;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    p {
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
    }
</style>

</html>