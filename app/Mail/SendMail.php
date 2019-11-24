<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $subject;
     public $message;

    public function __construct($sub,$msg)
    {
        $this->subject = $sub;
            $this->message = $msg;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.index')->with([
              'key_sub'=> $this->subject,
              'key_msg'=> $this->message
        ]);
    }
}
