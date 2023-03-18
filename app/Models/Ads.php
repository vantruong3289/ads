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
        'name',
        'active',
        'seconds',
        'currency',
        'money',
        'allow',
        'data',

        'brand_id',
        'design_id',
    ];

    protected $casts = [
        'active' => 'boolean',
        'allow' => 'boolean',
        'data' => 'json',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function design()
    {
        return $this->belongsTo(Design::class);
    }

    public function watchs()
    {
        return $this->hasMany(Watch::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('photos');
        $this->addMediaCollection('video')->singleFile();
    }
}
