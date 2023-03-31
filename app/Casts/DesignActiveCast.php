<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class DesignActiveCast implements CastsAttributes
{

    public function get($model, string $key, $value, array $attributes)
    {
        switch ($value) {
            case 0:
                return 'UNACTIVE';
            case 1:
                return 'ACTIVE';
        }
        return $value;
    }

    public function set($model, string $key, $value, array $attributes)
    {
        switch ($value) {
            case 'UNACTIVE':
                return 0;
            case 'ACTIVE':
                return 1;
        }
        return $value;
    }
}
