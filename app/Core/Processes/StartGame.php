<?php

namespace App\Core\Processes;

use Carbon\Carbon;
use App\Models\Game;
use App\Models\GameState;
use App\Events\GameStarted;

class StartGame
{
    public function __invoke(Game $game)
    {
        $started = GameState::where('name', 'started')->firstOrFail();
        
        $game->update([
            'started_at' => Carbon::now(),
            'state_id' => $started->id
        ]);

        event(new GameStarted($game));
    }
}