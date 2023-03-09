<?php

namespace App\Actions\Bill;

use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class ListBill
{
    use AsAction;

    public function handle()
    {
        $advertiser = Auth::guard('advertiser')->user();
        $bills = $advertiser->bills;

        return view('bills.list', compact('bills'));
    }
}
