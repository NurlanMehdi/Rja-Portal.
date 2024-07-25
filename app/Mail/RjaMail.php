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
        dd($this->rja->companies);
        return $this->from(config('mail.from.address'), config('mail.from.name'))
            ->subject('RJA Details for ' . $this->rja->b2b_reference)
            ->view('emails.rja')
            ->with([
                'rja' => $this->rja,
            ]);
    }
}
