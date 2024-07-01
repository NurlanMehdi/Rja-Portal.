<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $fillable = ['rja_id', 'type', 'description', 'part_number', 'cost'];

    public function rja()
    {
        return $this->belongsTo(Rja::class);
    }
}
