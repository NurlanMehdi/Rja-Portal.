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


    public static function sendRjaEmail($id, $cc_emails)
    {
        $rja = Rja::with(['items', 'companies'])
            ->whereIn('id', [$id])
            ->first();
        //dd($rja->companies);

        if ($rja->mail != '') {
            $toMail = $rja->mail;
        } elseif ($rja->companies && $rja->companies->email) {
            $toMail = $rja->companies->email;
        }
        //dd($cc_emails);
        $ccEmails = [];
        foreach ($cc_emails as $cc_email) {
            $ccEmails[] = $cc_email['email'];
        }
        Mail::to($toMail)->cc($ccEmails)->send(new \App\Mail\RjaMail($rja));

        session()->flash('message', 'Emails sent successfully.');
    }
}
