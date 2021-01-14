<?php

namespace App\Core\Processes;

use Carbon\Carbon;
use App\Models\Game;
use App\Models\GameState;
use App\Events\GameStarted;

class FinishGame
{
    public function __invoke(Game $game)
    {
        $finished = GameState::where('name', 'finished')->firstOrFail();
        
        $game->update([
            'finished_at' => Carbon::now(),
            'state_id' => $finished->id
        ]);

        event(new GameStarted($game));
    }
}