<?php

namespace App\Actions\Advertiser\Account;

use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserAccountSignout
{
    use AsAction;

    public function handle()
    {
        Auth::guard('advertiser')->logout();
        return redirect('advertisers\sign-in');
    }
}
