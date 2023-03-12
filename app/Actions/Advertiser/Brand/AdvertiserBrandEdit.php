<?php

namespace App\Actions\Advertiser\Brand;

use App\Models\Brand;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserBrandEdit
{
    use AsAction;

    public function handle(Brand $brand)
    {
        return view('advertisers.brands.edit', compact('brand'));
    }
}
