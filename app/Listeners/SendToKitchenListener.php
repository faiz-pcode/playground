<?php

namespace App\Listeners;

use App\Events\SendToKitchenEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;

class SendToKitchenListener
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
     * @param  SendToKitchenEvent  $event
     * @return void
     */
    public function handle(SendToKitchenEvent $event)
    {
        $now = Carbon::now();
        Log::info("SendToKitchenListener: Sent '{$event->item->name}' with quantity [{$event->item->quantity}] to {$event->item->where_to}");
    }
}
