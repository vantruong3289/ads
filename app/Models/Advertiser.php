<?php

namespace App\Models;

use App\Enums\SexEnum;
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

    protected $fillable = [
        'name',
        'email',
        'password',
        'sex',
    ];

    protected $casts = [
        'sex' => SexEnum::class,
    ];

    public function brands()
    {
        return $this->hasMany(Brand::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar')->singleFile();
    }
}
