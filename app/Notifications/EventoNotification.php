<?php

namespace App\Notifications;

use App\Eventos;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class EventoNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Eventos $eventos)
    {
        $this->eventos = $eventos; 
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
            'eventos' => $this->eventos->id,
            'titulo' => $this->eventos->name,
            'descripcion' => $this->eventos->description,
            'icono' => 'ni-calendar-grid-58',          
            'evento' => 'Evento',
            'link' => 'http://localhost/Montechelo/public/calendar',
        ]; 
    }
}
