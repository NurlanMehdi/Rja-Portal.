<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyMail extends Model
{
    use HasFactory;

    protected $fillable = ['company_id', 'email'];

    protected $table = 'companies_mails';

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
