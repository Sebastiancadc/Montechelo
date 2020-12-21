<?php

namespace App\Listeners;

use App\Notifications\EventoNotification;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class EventoListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        User::all()
        ->except($event->eventos->Usuario_id_Usuario)
        ->each(function(User $user) use ($event){
            Notification::send($user, new EventoNotification($event->eventos));
        });
    }
}
