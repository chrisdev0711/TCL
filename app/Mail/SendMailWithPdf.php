<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendCustomerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $pdf;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $pdf)
    {
        //
        $this->details = $details;
        $this->pdf = $pdf;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from TCL Tanker Track')->text('emails.send_customer_plain')
            ->attachData($this->pdf,'customer.pdf');
    }
}
