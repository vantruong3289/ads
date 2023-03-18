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

        return back();
    }
}
