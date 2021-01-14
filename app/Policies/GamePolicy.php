<?php

namespace App\Policies;

use App\User;
use App\Models\Game;
use App\Exceptions\GameWasNotAcceptedException;
use App\Exceptions\CreateGameUnfinishedException;
use App\Exceptions\CreateGameMatchmakingUnfinishedException;
use App\Exceptions\GameStartedNotByTheirOwnPlayersException;
use App\Exceptions\GameFinishNotByItsUserException;
use Illuminate\Auth\Access\HandlesAuthorization;

class GamePolicy
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
     * @param  \App\Models\Game  $game
     * @return mixed
     */
    public function view(User $user, Game $game)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if($user->hasUnfinishedGames())
        {
            if($user->unfinished_game->state->name == 'matchmaking')
                throw new CreateGameMatchmakingUnfinishedException;

            throw new CreateGameUnfinishedException;
        }

        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Game  $game
     * @return mixed
     */
    public function update(User $user, Game $game)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Game  $game
     * @return mixed
     */
    public function delete(User $user, Game $game)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Game  $game
     * @return mixed
     */
    public function restore(User $user, Game $game)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Game  $game
     * @return mixed
     */
    public function forceDelete(User $user, Game $game)
    {
        //
    }

    public function start(User $user, Game $game)
    {
        if( ($user->id != $game->user_id) && 
            ($game->hasAcceptedRequest() && $game->accepted_request->user_id != $user->id))
            throw new GameStartedNotByTheirOwnPlayersException;

        if($game->state->name != 'accepted')
            throw new GameWasNotAcceptedException;

        return true;
    }

    public function finish(User $user, Game $game)
    {
        if($user->id != $game->user_id)
            throw new GameFinishNotByItsUserException;

        return true;
    }
}
