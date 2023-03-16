<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class StatusBillCast implements CastsAttributes
{

    public function get($model, string $key, $value, array $attributes)
    {
        switch ($value) {
            case 0:
                return 'PENDING';
            case 1:
                return 'PAID';
        }
    }

    public function set($model, string $key, $value, array $attributes)
    {
        switch ($value) {
            case 'PENDING':
                return 0;
            case 'PAID':
                return 1;
        }
    }
}
