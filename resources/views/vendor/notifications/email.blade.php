@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Hola!')
@endif
@endif

{{-- Intro Lines --}}
{{-- Intro Lines --}}
<p>Estas recibiendo este email porque has solicitado cambiar la contraseña</p>

{{-- Action Button --}}


{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => '$actionUrl', 'color' => $color])
<P style="color:white;">Recuperar contraseña</P>
@endcomponent
@endisset

{{-- Outro Lines --}}
<p>
    Este enlace  caudacara en 60 minutos.
    si no has solicitado el cambio de contraseña, no tienes que hacer nada.

    saludos, Montechelo.
</p>

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else

@endif

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "Si tienes problemas con el boton 'Recuperar contraseña', copia y pega la siguiente URL el la\n".
    'barra de navegador: [:actionURL](:actionURL)',
    [
        'actionText' => $actionText,
        'actionURL' => $actionUrl,  
    ]
)
@endslot
@endisset
@endcomponent
