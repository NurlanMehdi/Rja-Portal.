<?php

namespace App\Mail;

use App\Models\Rja;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RjaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $rja;

    public function __construct(Rja $rja)
    {
        $this->rja = $rja;
    }

    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
        ->subject('RJA Details')
        ->view('emails.rja')
        ->with([
            'rja' => $this->rja,
        ]);
    }
}
