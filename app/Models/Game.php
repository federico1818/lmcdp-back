<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Ball;
use App\Models\Platform;
use App\Models\GameRequest;

class Game extends Model
{
    protected $fillable = [
        'ball_id',
        'platform_id',
        'state_id'
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
    
    public function getAcceptedRequestAttribute()
    {
        return $this->requests()->whereNotNull('accepted_at')->first();
    }
    
    public function hasAcceptedRequest()
    {
        return $this->requests()->whereNotNull('accepted_at')->exists();
    }
    
}
