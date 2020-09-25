<?php

namespace App\Listeners;

use App\Events\SendToBarEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;

class SendToBarListener
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
     * @param  SendToBarEvent  $event
     * @return void
     */
    public function handle(SendToBarEvent $event)
    {
        $now = Carbon::now();
        Log::info("SendToBarListener: Sent '{$event->item->name}' with quantity [{$event->item->quantity}] to {$event->item->where_to}");
    }
}
