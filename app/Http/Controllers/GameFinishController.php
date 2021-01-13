<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameFinishController extends Controller
{
    public function store(Request $request, Game $game)
    {
        return $game;
    }
}
