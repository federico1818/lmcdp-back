<?php

namespace App\Core\Processes;

use Carbon\Carbon;
use App\Models\GameState;
use App\Models\GameRequest;
use App\Events\GameRequestAccepted;

class AcceptGameRequest
{
    public function __invoke(GameRequest $gameRequest)
    {
        $gameRequest->update([
            'accepted_at' => Carbon::now()
        ]);

        $accepted = GameState::where('name', 'accepted')->firstOrFail();

        $gameRequest->game->state()->associate($accepted)->save();

        event(new GameRequestAccepted($gameRequest));
    }
}