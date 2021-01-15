<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Ball;
use App\Models\Report;
use App\Models\Platform;
use App\Models\GameRequest;

class Game extends Model
{
    protected $fillable = [
        'ball_id',
        'platform_id',
        'state_id',
        'started_at',
        'finished_at'
    ];

    public function ball()
    {
        return $this->belongsTo(Ball::class);
    }
    
    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function state()
    {
        return $this->belongsTo(GameState::class);
    }

    public function requests()
    {
        return $this->hasMany(GameRequest::class);
    }
    
    public function reports()
    {
        return $this->hasMany(Report::class);
    }
    
    public function getAcceptedRequestAttribute()
    {
        return $this->requests()->whereNotNull('accepted_at')->first();
    }
    
    public function hasAcceptedRequest()
    {
        return $this->requests()->whereNotNull('accepted_at')->exists();
    }

    public function getPlayersAttribute()
    {
        return collect([
            $this->user,
            $this->accepted_request->user
        ]);
    }

    public function getOpponentFrom(User $user)
    {
        if($this->isOwner($user))
            return $this->accepted_request->user();

        if($this->accepted_request->user->id == $user->id)
            return $this->user();

        return NULL;
    }

    public function isOwner(User $user)
    {
        return $user->id == $this->user_id;
    }

    public function isAPlayer(User $user)
    {
        return $this->players->pluck('id')->contains($user->id);
    }
    
}
