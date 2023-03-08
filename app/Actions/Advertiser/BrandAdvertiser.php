<?php

namespace App\Actions\Advertiser;

use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class BrandAdvertiser
{
    use AsAction;

    public function handle()
    {
        $advertiser = Auth::guard('advertiser')->user();
        $brands = $advertiser->brands;

        return view('advertisers.brand', compact('brands'));
    }
}
