<?php

namespace App\Models;

use App\Casts\StatusBillCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    const PEDING = 'PEDING';
    const PAID = 'PAID';

    protected $fillable = [
        'advertiser_id',
        'code',
        'currency',
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
