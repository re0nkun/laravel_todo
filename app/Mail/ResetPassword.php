<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    // private $token;
    public $token;
    public $email;

    /**
     * Create a new message instance.
     *
     * @params $token
     */
    public function __construct($token, $email)
    {
        $this->token = $token;
        $this->email = $email;
    }
    // public function __construct($token)
    // {
    //     $this->token = $token;
    // }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject('パスワード再設定')
        ->view('mail.password-reset');
        // ->view('mail.password-reset', [
        //     'email' => $this->email,
        // ]);
    }
}
