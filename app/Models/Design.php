<?php

namespace App\Models;

use App\Casts\ActiveDesignCast;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Design extends Model
{
    use HasFactory;
    const ACTIVE = 'ACTIVE';
    const UNACTIVE = 'UNACTIVE';

    protected $fillable = [
        'code',
        'name',
        'active',
    ];

    protected $casts = [
        'active' => ActiveDesignCast::class,
    ];

    protected $attributes = [
        'active' => 0,
    ];

    public function ads()
    {
        return $this->hasMany(Ads::class);
    }

    protected function data(): Attribute
    {
        return Attribute::make(
            get:function () {
                $json = File::get(resource_path("/views/designs/{$this->code}/data.json"));
                $data = json_decode($json);
                return $data;
            }
        );
    }

    protected function fields(): Attribute
    {
        return Attribute::make(
            get:function () {
                $json = File::get(resource_path("/views/designs/{$this->code}/fields.json"));
                $data = json_decode($json);
                return $data;
            }
        );
    }
}
