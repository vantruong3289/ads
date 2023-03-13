<?php

namespace App\Actions\Consumer\Brand;

use App\Models\Brand;
use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerBrandShow
{
    use AsAction;

    public function handle(Brand $brand)
    {
        return view('home', compact('brand'));
    }
}
