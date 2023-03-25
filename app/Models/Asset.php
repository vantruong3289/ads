<?php

namespace App\Models;

use App\Casts\StatusAssetCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    const PROCESSING = 0;

    protected $fillable = [
        'consumer_id',
        'currency',
        'money',
        'withdraw',
        'view',
        'status',
    ];

    protected $casts = [
        'money' => 'float',
        'withdraw' => 'float',
        'status' => StatusAssetCast::class,
    ];

    protected $attributes = [
        'status' => 0,
    ];

    public function consumer()
    {
        return $this->belongsTo(Consumer::class);
    }
}
