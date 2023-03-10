<?php

namespace App\Actions\Advertiser;

use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserSignout
{
    use AsAction;

    public function handle()
    {
        Auth::guard('advertiser')->logout();
        return redirect('advertisers\sign-in');
    }
}
