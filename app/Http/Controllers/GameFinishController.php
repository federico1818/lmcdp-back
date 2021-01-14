<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Core\Processes\FinishGame;

class GameFinishController extends Controller
{
    public function store(Request $request, Game $game)
    {
        $this->authorize('finish', $game);

        (new FinishGame)($game);

        return $game;
    }
}
