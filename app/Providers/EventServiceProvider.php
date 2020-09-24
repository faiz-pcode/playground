<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

use App\Events\SendToKitchenEvent;
use App\Events\SendToKitchen2Event;
use App\Events\SendToBarEvent;
use App\Listeners\SendToKitchenListener;
use App\Listeners\SendToKitchen2Listener;
use App\Listeners\SendToBarListener;

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
        SendToKitchenEvent::class => [
            SendToKitchenListener::class
        ],
        SendToKitchen2Event::class => [
            SendToKitchen2Listener::class
        ],
        SendToBarEvent::class => [
            SendToBarListener::class
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
