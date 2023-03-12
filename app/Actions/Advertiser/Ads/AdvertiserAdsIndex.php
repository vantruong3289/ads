<?php

namespace App\Actions\Advertiser\Ads;

use App\Models\Brand;
use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserAdsIndex
{
    use AsAction;

    public function handle()
    {
        $advertiser = Auth::guard('advertiser')->user();
        $adss = $advertiser->adss;
        $brands = Brand::whereAdvertiserId($advertiser->id)->get();

        return view('advertisers.ads.list', compact('adss', 'brands'));
    }
}
