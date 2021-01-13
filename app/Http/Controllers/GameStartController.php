<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Core\Processes\StartGame;

class GameStartController extends Controller
{
    public function store(Request $request, Game $game)
    {
        $this->authorize('start', $game);

        (new StartGame)($game);

        return $game;
    }
}
