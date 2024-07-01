<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rja extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_profile',
        'maintenance_email',
        'b2b_reference',
        'diagnosis',
        'labour_items',
        'parts_items',
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
