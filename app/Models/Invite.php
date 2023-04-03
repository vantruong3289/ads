<?php

namespace App\Models;

use App\Casts\InviteStatusCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    use HasFactory;

    protected $fillable = [
        'consumer_id',
        'email',
        'status',
    ];

    protected $casts = [
        'status' => InviteStatusCast::class,
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
