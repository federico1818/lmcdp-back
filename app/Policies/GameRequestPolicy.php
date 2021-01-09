<?php

namespace App\Policies;

use App\User;
use App\Models\Game;
use App\Models\GameRequest;
use App\Core\Exception\GameRequestOwnGameException;
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
}
