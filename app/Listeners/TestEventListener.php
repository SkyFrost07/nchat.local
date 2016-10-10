<?php

namespace App\Listeners;

use App\Events\TestEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestEventListener implements ShouldQueue
{
    public function __construct()
    {
        //
    }

    public function handle(TestEvent $event)
    {
        //
    }
}
