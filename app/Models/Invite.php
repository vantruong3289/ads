<?php

namespace App\Models;

use App\Casts\InviteStatusCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    use HasFactory;

    const WAITING = 0;
    const SUCCESS = 1;

    protected $fillable = [
        'consumer_id',
        'email',
        'status',
    ];

    protected $casts = [
        'status' => InviteStatusCast::class,
    ];

    public function consumer()
    {
        return $this->belongsTo(Consumer::class);
    }
}
