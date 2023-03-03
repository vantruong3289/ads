<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Brand extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'email',
        'address',
        'about',
        'website',
        'map',
        'phone',

        'advertiser_id',
    ];

    public function advertiser()
    {
        return $this->belongsTo(Advertiser::class);
    }

    public function adss()
    {
        return $this->hasMany(Ads::class)->latest('design');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logo')->singleFile();
        $this->addMediaCollection('banner')->singleFile();
        $this->addMediaCollection('cover')->singleFile();
    }
}
