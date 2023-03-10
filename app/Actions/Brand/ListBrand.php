<?php

namespace App\Actions\Brand;

use App\Models\Brand;
use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class ListBrand
{
    use AsAction;

    public function handle()
    {
        $advertiser = Auth::guard('advertiser')->user();
        $brands = $advertiser->brands;
        $hasNoAds = Brand::whereAdvertiserId($advertiser->id)->doesntHave('adss')->exists();
        return view('brands.list', compact('brands', 'hasNoAds'));
    }
}
