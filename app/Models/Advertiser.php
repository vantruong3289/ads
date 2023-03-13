<?php

namespace App\Models;

use App\Casts\SexCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Advertiser extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable;
    use InteractsWithMedia;

    const MALE = 'MALE';
    const FEMALE = 'FEMALE';

    protected $fillable = [
        'name',
        'email',
        'password',
        'sex',
    ];

    protected $casts = [
        'sex' => SexCast::class,
    ];

    public function brands()
    {
        return $this->hasMany(Brand::class)->latest();
    }

    public function adss()
    {
        return $this->hasManyThrough(Ads::class, Brand::class)->latest();
    }

    public function bills()
    {
        return $this->hasMany(Bill::class)->latest();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar')->useFallbackUrl('https://cdn-icons-png.flaticon.com/512/3177/3177440.png')->singleFile();
    }
}
