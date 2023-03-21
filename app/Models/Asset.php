<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'consumer_id',
        'brand_id',
        'currency',
        'money',
        'withdraw',
        'view',
    ];

    protected $casts = [
        'money' => 'float',
        'withdraw' => 'float',
    ];

    public function consumer()
    {
        return $this->belongsTo(Consumer::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
