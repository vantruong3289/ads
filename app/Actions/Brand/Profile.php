<?php

namespace App\Actions\Brand;

use App\Models\Brand;
use Lorisleiva\Actions\Concerns\AsAction;

class Profile
{
    use AsAction;

    public function handle(Brand $brand)
    {
        return view('brands.profile', compact('brand'));
    }
}
