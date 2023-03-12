<?php

namespace App\Actions\Advertiser\Brand;

use App\Models\Brand;
use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserBrandIndex
{
    use AsAction;

    public function handle()
    {
        $advertiser = Auth::guard('advertiser')->user();
        $brands = $advertiser->brands;
        $hasNoAds = Brand::whereAdvertiserId($advertiser->id)->doesntHave('adss')->exists();
        return view('advertisers.brands.list', compact('brands', 'hasNoAds'));
    }
}
