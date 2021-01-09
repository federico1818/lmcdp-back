<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Notifications\PasswordResetNotification;
use App\Notifications\VerifyEmailNotification;
use App\Traits\RolesAndPermissions;
use App\Models\UserState;
use App\Models\Game;
use App\Models\GameRequest;


class User extends Authenticatable implements MustVerifyEmail
{
    use RolesAndPermissions, HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordResetNotification($token));
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmailNotification);
    }

    public function state()
    {
        return $this->belongsTo(UserState::class);
    }

    public function games()
    {
        return $this->hasMany(Game::class);
    }

    public function requests()
    {
        return $this->hasMany(GameRequest::class);
    }

    public function hasUnfinishedGames(): bool
    {
        return $this->games()
                    ->whereHas('state', function($query) {
                        $query->where('name', '<>', 'finished');
                    })
                    ->exists();
    }
}
