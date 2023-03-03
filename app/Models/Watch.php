<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    use HasFactory;

    protected $fillable = [
        'consumer_id',
        'brand_id',
        'ads_id',
        'currency',
        'money',
        'voucher',
        'status',
    ];

    public function consumer()
    {
        return $this->belongsTo(Consumer::class);
    }

    public function ads()
    {
        return $this->belongsTo(Ads::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
