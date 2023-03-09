<?php

namespace App\Models;

use App\Casts\SexCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Consumer extends Authenticatable implements HasMedia
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
        'sex' => SexCast::class,
    ];

    public function watchs()
    {
        return $this->hasMany(Watch::class);
    }

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar')->useFallbackUrl('https://cdn-icons-png.flaticon.com/512/3177/3177440.png')->singleFile();
    }
}
