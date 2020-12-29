<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;

class PasswordResetEmail extends Mailable
{
    //use Queueable, SerializesModels;
    use SerializesModels;

    public $user;
    public $token;
    public $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, String $token)
    {
        $this->user = $user;
        $this->token = $token;
        $this->url = $this->generateUrl();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.auth.password-reset');
    }

    protected function generateUrl()
    {
        return env('APP_URL_FRONT') . '/password/reset/' . $this->token . '?email=' . $this->user->email;
    }
    
}
