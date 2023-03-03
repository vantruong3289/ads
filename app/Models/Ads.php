<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Ads extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'content',
        'active',
        'design',
        'seconds',
        'currency',
        'money',
        'voucher',

        'brand_id',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('ads-mobile')->singleFile();
        $this->addMediaCollection('ads-desktop')->singleFile();
    }
}
