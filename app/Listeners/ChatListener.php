<?php

namespace App\Listeners;

use App\Notifications\ChatNotification;
use App\User;
use Chatify\Facades\ChatifyMessenger;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class ChatListener
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
        // User::all()
        // ->except($event->chat->from_id)
        // ->each(function(ChatifyMessenger $chat) use($event){
        //     Notification::send($chat->to_id, new ChatNotification($event->chat));
        // });

        User::all()
        ->except($event->chat->from_id)
        ->each(function(User $user) use($event){
            Notification::send($user, new ChatNotification($event->chat));
        });
    }
}
