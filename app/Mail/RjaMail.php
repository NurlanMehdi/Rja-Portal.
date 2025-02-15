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

        // dd($this->rja->companies);


        $subject = 'RJA Details for ' . $this->rja->b2b_reference;

        if ($this->rja->status == Rja::STATUS_APPROVED) {
            $subject = 'RJA Approved Successfully ' . $this->rja->b2b_reference;
        } elseif ($this->rja->status == Rja::STATUS_REJECTED) {
            $subject = 'RJA Rejected Successfully ' . $this->rja->b2b_reference;
        }
        $this->rja->subject = $subject;
        //dd('RJA Details for ' . $this->rja->b2b_reference);
        return $this->from(config('mail.from.address'), config('mail.from.name'))
            ->subject($subject)
            ->view('emails.rja')
            ->with([
                'rja' => $this->rja,
            ]);
    }
}
