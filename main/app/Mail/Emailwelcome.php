<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Models\User;


class Emailwelcome extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Welcome')->view('emails.welcome', ['data' => $this->data]);
    }
}