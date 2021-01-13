<?php

namespace App\Core\Processes;

use App\Models\Game;

class StartGame
{
    public function __invoke(Game $game)
    {
        $inGame = GameState::where('name', 'in-game')->firstOrFail();

        $game->state()->associate($inGame)->save();

        event(new GameStarted($game));
    }
}