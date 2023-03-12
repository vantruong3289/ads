<?php

namespace App\Actions;

use App\Models\Brand;
use Lorisleiva\Actions\Concerns\AsAction;

class BrandShow
{
    use AsAction;

    public function handle(Brand $brand)
    {
        return view('home', compact('brand'));
    }
}
