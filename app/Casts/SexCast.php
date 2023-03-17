<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class SexCast implements CastsAttributes
{

    public function get($model, string $key, $value, array $attributes)
    {
        switch ($value) {
            case 0:
                return 'MALE';
            case 1:
                return 'FEMALE';
        }
        return $value;
    }

    public function set($model, string $key, $value, array $attributes)
    {
        switch ($value) {
            case 'MALE':
                return 0;
            case 'FEMALE':
                return 1;
        }
        return $value;
    }
}
