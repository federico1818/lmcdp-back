<?php

namespace App\Policies;

use App\User;
use App\Models\Game;
use App\Models\GameRequest;
use App\Exceptions\GameRequestOwnGameException;
use App\Exceptions\GameRequestDuplicateException;
use App\Exceptions\GameRequestAcceptNotOwnGameException;
use App\Exceptions\GameRequestAcceptNotMatchmakingException;
use App\Exceptions\GameRequestNotMatchmakingException;
use Illuminate\Auth\Access\HandlesAuthorization;

class GameRequestPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\GameRequest  $gameRequest
     * @return mixed
     */
    public function view(User $user, GameRequest $gameRequest)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user, Game $game)
    {
        if($user->id == $game->user_id)
            throw new GameRequestOwnGameException;
        
        if($game->state->name != 'matchmaking')
            throw new GameRequestNotMatchmakingException;
            
        if($game->requests()->where('user_id', $user->id)->exists())
            throw new GameRequestDuplicateException;
        
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\GameRequest  $gameRequest
     * @return mixed
     */
    public function update(User $user, GameRequest $gameRequest)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\GameRequest  $gameRequest
     * @return mixed
     */
    public function delete(User $user, GameRequest $gameRequest)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\GameRequest  $gameRequest
     * @return mixed
     */
    public function restore(User $user, GameRequest $gameRequest)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\GameRequest  $gameRequest
     * @return mixed
     */
    public function forceDelete(User $user, GameRequest $gameRequest)
    {
        //
    }

    public function accept(User $user, GameRequest $gameRequest)
    {
        if($gameRequest->game->state->name != 'matchmaking')
            throw new GameRequestAcceptNotMatchmakingException;

        if($user->id != $gameRequest->game->user->id)
            throw new GameRequestAcceptNotOwnGameException;
        
        return true;
    }
}
