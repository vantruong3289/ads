<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

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
    ];

    public function advertiser()
    {
        return $this->belongsTo(Advertiser::class);
    }
}
