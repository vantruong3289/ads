<?php

namespace App\Actions\Advertiser\Ads;

use App\Actions\System\SystemAllowAds;
use App\Models\Ads;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserAdsUpdate
{
    use AsAction;

    public function handle(Ads $ads, Request $request)
    {
        $input = $request->input();
        $ads->update($input);
        if ($request->filled('money')) {
            SystemAllowAds::dispatch($ads->brand->advertiser);
        }

        return back();
    }
}
