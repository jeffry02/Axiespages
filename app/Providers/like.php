<?php

namespace App\Providers;

use App\Events\LikesEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class like
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(LikesEvent $event)
    {
        return $event->itemId;
    }
}
