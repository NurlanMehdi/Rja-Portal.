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

    protected $casts = [
        'labour_items' => 'array',
        'parts_items' => 'array',
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
        return $this->hasMany(Item::class);
    }
}
