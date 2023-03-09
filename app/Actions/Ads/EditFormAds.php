<?php

namespace App\Actions\Ads;

use App\Models\Ads;
use App\Models\Brand;
use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class EditFormAds
{
    use AsAction;

    public function handle(Ads $ads)
    {
        $advertiser = Auth::guard('advertiser')->user();
        $brands = Brand::whereAdvertiserId($advertiser->id)->get();

        return view('ads.edit', compact('ads', 'brands'));
    }
}
