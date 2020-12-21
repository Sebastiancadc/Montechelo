<?php

namespace App\Notifications;

use App\Noticia;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NoticiasNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Noticia $noticias)
    {
       $this->noticias = $noticias; 
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
            'eventos' => $this->noticias->Id_noticia,
            'titulo' => $this->noticias->title,
            'descripcion' => $this->noticias->body,
            'icono' => 'fa fa-newspaper',
            'evento' => 'Noticia',
            'link' => 'http://localhost/Montechelo/public/noticiausu',
        ];
    }
}
