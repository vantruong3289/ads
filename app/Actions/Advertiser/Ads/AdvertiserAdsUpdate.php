<?php

namespace App\Actions\Advertiser\Ads;

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
        if ($request->hasFile('photo')) {
            $ads->addMedia($request->file('photo'))->toMediaCollection('photo');
        }
        if ($request->hasFile('video')) {
            $ads->addMedia($request->file('video'))->toMediaCollection('video');
        }
        // AllowAds::dispatch($ads->brand->advertiser);

        return back();
    }
}
