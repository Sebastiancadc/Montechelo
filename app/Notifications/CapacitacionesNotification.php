<?php

namespace App\Notifications;

use App\Capacitaciones;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class CapacitacionesNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Capacitaciones $capacitaciones)
    {
        $this->capacitaciones = $capacitaciones;
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

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'anuncios' => $this->capacitaciones->id_capacitacion,
            'titulo' => $this->capacitaciones->titulo,
            'descripcion' => $this->capacitaciones->descripcion,
            'icono' => 'fas fa-chalkboard-teacher',          
            'evento' => 'Capacitaciones',
            'link' => 'http://localhost/Montechelo/public/capacitaciones',
        ];
    }
}
