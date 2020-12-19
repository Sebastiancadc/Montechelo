<?php

namespace App\Notifications;

use App\Anuncios;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AnunciosNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Anuncios $anuncios)
    {
        $this->anuncios = $anuncios;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'anuncios' => $this->anuncios->id,
            'titulo' => $this->anuncios->titulo,
            'descripcion' => $this->anuncios->descripcion,
            'tipo' => $this->anuncios->tipo,
            'icono' => 'ni ni-notification-70',          
            'evento' => 'Anuncio',
            'link' => 'http://localhost/Montechelo/public/Notificaciones',
        ];
    }
}
