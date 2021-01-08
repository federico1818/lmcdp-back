<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Ball;
use App\Models\Platform;

class Game extends Model
{
    protected $fillable = [
        'ball_id',
        'platform_id'
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
}
