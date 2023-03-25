<?php

namespace App\Models;

use App\Casts\StatusBillCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    const PENDING = 0;
    const PAID = 1;
    const END = 2;

    protected $fillable = [
        'advertiser_id',
        'code',
        'currency',
        'budget',
        'money',
        'time',
        'status',
    ];

    protected $casts = [
        'time' => 'datetime',
        'status' => StatusBillCast::class,
    ];

    public function advertiser()
    {
        return $this->belongsTo(Advertiser::class);
    }
}
