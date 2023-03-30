<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'consumer_id',
        'currency',
        'money',
        'view',
    ];

    protected $casts = [
        'money' => 'float',
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
