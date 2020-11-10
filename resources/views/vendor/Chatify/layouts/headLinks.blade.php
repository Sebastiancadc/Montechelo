{{-- Meta tags --}}
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="route" content="{{ $route }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="url" content="{{ url('').'/'.config('chatify.path') }}" data-user="{{ Auth::user()->id }}">

{{-- scripts --}}
<script src="{{ asset('js/font.awesome.min.js') }}"></script>
<script src="{{ asset('js/autosize.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src='https://unpkg.com/nprogress@0.2.0/nprogress.js'></script>

{{-- styles --}}
<link rel='stylesheet' href='https://unpkg.com/nprogress@0.2.0/nprogress.css'/>
<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
<link href="{{ asset('css/'.$dark_mode.'.mode.css') }}" rel="stylesheet" />
<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
<title>Montechelo </title>
<link rel="icon" href="{{asset("plantilla/img/theme/isotipo.png")}}" type="image/png">
{{-- Messenger Color Style--}}
@include('Chatify::layouts.messengerColor')