<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class InviteStatusCast implements CastsAttributes
{

    public function get($model, string $key, $value, array $attributes)
    {
        switch ($value) {
            case 0:
                return 'WAITING';
            case 1:
                return 'SUCCESS';
        }
        return $value;
    }

    public function set($model, string $key, $value, array $attributes)
    {
        switch ($value) {
            case 'WAITING':
                return 0;
            case 'SUCCESS':
                return 1;
        }
        return $value;
    }
}
