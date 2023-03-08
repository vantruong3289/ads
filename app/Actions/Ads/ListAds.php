<?php

namespace App\Actions\Ads;

use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class ListAds
{
    use AsAction;

    public function handle()
    {
        $advertiser = Auth::guard('advertiser')->user();
        $adss = $advertiser->adss;

        return view('ads.list', compact('adss'));
    }
}
