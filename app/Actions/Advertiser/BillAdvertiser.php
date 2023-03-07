<?php

namespace App\Actions;

use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class BillAdvertiser
{
    use AsAction;

    public function handle()
    {
        $advertiser = Auth::guard('advertiser')->user();
        $bills = $advertiser->bills;

        return view('advertisers.bill', compact('bills'));
    }
}
