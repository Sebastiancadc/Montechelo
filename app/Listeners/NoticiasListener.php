<?php

namespace App\Listeners;

use App\Notifications\NoticiasNotification;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class NoticiasListener
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
        ->except($event->noticias->user_id)
        ->each(function(User $user) use ($event){
            Notification::send($user, new NoticiasNotification($event->noticias));
        });
    }
}
