<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RjaMail extends Model
{
    use HasFactory;

    protected $fillable = ['rja_id', 'mail'];

    protected $table = 'rjas_mails';

    public function rja()
    {
        return $this->belongsTo(Rja::class);
    }
}
