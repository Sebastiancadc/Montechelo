<?php

namespace App\Providers;


use App\Events\AnuncioEvent;
use App\Events\CapacitacionesEvent;
use App\Events\EventoEvent;
use App\Events\NoticiasEvent;
use App\Listeners\AnuncioListener;
use App\Listeners\CapacitacionesListener;
use App\Listeners\EventoListener;
use App\Listeners\NoticiasListener;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        AnuncioEvent::class =>[
            AnuncioListener::class,
        ],
        EventoEvent::class =>[
            EventoListener::class,
        ],
        NoticiasEvent::class =>[
            NoticiasListener::class,
        ],
        CapacitacionesEvent::class =>[
            CapacitacionesListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
