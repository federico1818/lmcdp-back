<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameRequest extends Model
{
    protected $fillable = [
        'game_id',
        'user_id'
    ];
}
