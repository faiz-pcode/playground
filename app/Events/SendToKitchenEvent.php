<?php

namespace App\Events;

use App\Item;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendToKitchenEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $item;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('kitchen-01');
    }

    /**
     * The event's broadcast name
     * 
     * @return string
     */
    public function broadcastAs()
    {
        return 'item-created';
    }

    /**
     * Specifically broadcasts the necessary array keys
     *
     * @return array
     */
    public function broadcastWith()
    {
        return [
            'item' => [
                'name' => $this->item->name,
                'quantity' => $this->item->quantity,
            ]
        ];
    }
}
