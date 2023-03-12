<?php

namespace App\Actions\Advertiser;

use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserHome
{
    use AsAction;

    public function handle()
    {
        $advertiser = Auth::guard('advertiser')->user();
        return view('advertisers.home', compact('advertiser'));
    }
}
