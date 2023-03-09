<?php

namespace App\Actions\Ads;

use App\Models\Brand;
use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class ListAds
{
    use AsAction;

    public function handle()
    {
        $advertiser = Auth::guard('advertiser')->user();
        $adss = $advertiser->adss;
        $brands = Brand::whereAdvertiserId($advertiser->id)->get();

        return view('ads.list', compact('adss', 'brands'));
    }
}
