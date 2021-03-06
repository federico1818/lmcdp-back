<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\GameRequest;
use App\Core\Processes\AcceptGameRequest;
use Illuminate\Http\Request;

class GameRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Game $game)
    {
        return $game->requests;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Game $game)
    {
        $this->authorize('create', [GameRequest::class, $game]);
        
        $gameRequest = GameRequest::create([
            'game_id' => $game->id,
            'user_id' => $request->user()->id
        ]);

        return $gameRequest;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GameRequest  $gameRequest
     * @return \Illuminate\Http\Response
     */
    public function show(GameRequest $gameRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GameRequest  $gameRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(GameRequest $gameRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GameRequest  $gameRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GameRequest $gameRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GameRequest  $gameRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameRequest $gameRequest)
    {
        //
    }

    public function accept(GameRequest $gameRequest)
    {
        $this->authorize('accept', $gameRequest);

        (new AcceptGameRequest)($gameRequest);

        return $gameRequest;
    }
}
