<?php

namespace App\Models;

use App\Actions\Ads\AllowAds;
use App\Casts\StatusBillCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    const PEDING = 0;
    const PAID = 1;

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

    protected static function booted(): void
    {
        static::updated(function (Bill $bill) {
            if ($bill->status == 'PAID') {
                AllowAds::dispatch($bill);
            }
        });
    }
}
