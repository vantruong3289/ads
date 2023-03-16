<?php

namespace App\Actions\Advertiser\Ads;

use App\Models\Ads;
use App\Models\Brand;
use App\Models\Design;
use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserAdsEdit
{
    use AsAction;

    public function handle(Ads $ads)
    {
        $advertiser = Auth::guard('advertiser')->user();
        $brands = Brand::whereAdvertiserId($advertiser->id)->get();
        $designs = Design::all();
        return view('advertisers.ads.edit', compact('ads', 'brands', 'designs'));
    }
}
