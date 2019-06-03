<?php

namespace App\Listeners;

use App\Events\ChatEvents;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ChatEventListener
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
     * @param  ChatEvents  $event
     * @return void
     */
    public function handle(ChatEvents $event)
    {
        //
    }
}
