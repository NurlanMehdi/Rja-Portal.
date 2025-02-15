<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public $otp;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($otp, $subject)
    {
        $this->otp = $otp;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
                    ->subject($this->subject)
                    ->view('emails.otp')
                    ->with([
                        'otp' => $this->otp,
                    ]);
    }
}