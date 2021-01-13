<?php

namespace App\Core\Processes;

use App\Models\Game;
use App\Models\GameState;
use App\Events\GameStarted;

class StartGame
{
    public function __invoke(Game $game)
    {
        $inGame = GameState::where('name', 'in-game')->firstOrFail();

        $game->state()->associate($inGame)->save();

        event(new GameStarted($game));
    }
}