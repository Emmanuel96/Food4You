<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class orderNotification implements ShouldBroadcast 
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user_name; 

    public $message;


    /**
     * Create a new event instance.
     *
     * @return void
     */

    public function __construct($user_name)
    {
        $this->user = $user_name;
        $this->message = "{$user_name} made an order";
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
     
    public function broadcastOn()
    {
        //return new PrivateChannel('channel-name');
        return new Channel('order-status');
    }
}
