<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CompanyEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name  = request('name');
        $email = request('email');
        $message   = request('message');
        return $this->from(request('email'))
                    ->markdown('emails.CompanyEmail')
                    ->with(['name'=>request('name'),'email'=>request('email'),'message'=>request('message')]);

        return $this->markdown('emails.CompanyEmail');
    }
}
