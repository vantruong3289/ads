<?php

namespace App\Actions\Advertiser\Account;

use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserAccountHome
{
    use AsAction;

    public function handle()
    {
        $advertiser = Auth::guard('advertiser')->user();
        return view('advertisers.home', compact('advertiser'));
    }
}
