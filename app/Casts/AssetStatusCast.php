<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class AssetStatusCast implements CastsAttributes
{

    public function get($model, string $key, $value, array $attributes)
    {
        switch ($value) {
            case 0:
                return '';
            case 1:
                return 'WAITING';
        }
        return $value;
    }

    public function set($model, string $key, $value, array $attributes)
    {
        switch ($value) {
            case '':
                return 0;
            case 'WAITING':
                return 1;
        }
        return $value;
    }
}
