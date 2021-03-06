<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Game;
use App\User;

class GameRequest extends Model
{
    protected $fillable = [
        'game_id',
        'user_id',
        'accepted_at'
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
