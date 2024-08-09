<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Rja extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'mail',
        'maintenance_email',
        'b2b_reference',
        'diagnosis',
    ];

    const STATUS_SUBMITTED = 0;
    const STATUS_APPROVED = 1;
    const STATUS_REJECTED = 2;

    public static function statuses()
    {
        return [
            self::STATUS_SUBMITTED => 'Submitted',
            self::STATUS_APPROVED => 'Approved',
            self::STATUS_REJECTED => 'Rejected',
        ];
    }

    public function approve()
    {
        $this->status = self::STATUS_APPROVED;
        $this->save();
    }

    public function reject()
    {
        $this->status = self::STATUS_REJECTED;
        $this->save();
    }

    public function items()
    {
        return $this->hasMany(Items::class);
    }

    public function companies()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }


    public static function sendRjaEmail($id)
    {
        $rja = Rja::with(['items', 'companies'])
            ->whereIn('id', [$id])
            ->first();

        $ccEmails = [];

        foreach ($rja->companies->emails as $email) {
            $toMail[] = $email->email;
        }
        foreach ($rja->emails->slice(1) as $cc_email) {
            $ccEmails[] = $cc_email['mail'];
        }
        if ($rja->status == 0) {
            $to_emails = $toMail;
        } else {

            $rja_email = ['rja@primeappliancerepairs.com'];
            $to_emails = array_merge($toMail, $rja_email);
        }
        // dd($ccEmails);
        Mail::to($to_emails)->cc($ccEmails)->send(new \App\Mail\RjaMail($rja));

        session()->flash('message', 'Emails sent successfully.');
    }

    public function emails()
    {
        return $this->hasMany(RjaMail::class);
    }
}
