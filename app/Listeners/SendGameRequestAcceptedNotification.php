<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\GameRequestAccepted;
use App\Notifications\GameRequestAcceptedNotification;

class SendGameRequestAcceptedNotification
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
     * @param  object  $event
     * @return void
     */
    public function handle(GameRequestAccepted $event)
    {
        $event->gameRequest->user->notify(new GameRequestAcceptedNotification($event->gameRequest->game));
    }
}
