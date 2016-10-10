<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TestEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $message;
    
    public function __construct($message)
    {
        $this->message = $message;
    }

    public function broadcastOn()
    {
        return ['test-event'];
    }
}
