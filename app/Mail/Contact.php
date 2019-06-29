<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
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
        //retrieve data from session
        $fname = session('fname');
        $lname = session('lname');

       $sendername = $fname.' '.$lname;
       $sendermail = session('email');
       $sendernum = session('mobile');
       $sendermsg = session('message');

        return $this->from($sendermail)
        ->subject('New Message From'.' '.$sendername)
        ->markdown('emails.contactmarkdown')
        ->with('sendermsg',$sendermsg)
        ->with('sendernum',$sendernum);

    }
}
