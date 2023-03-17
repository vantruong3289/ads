<?php

namespace App\Actions\Advertiser\Bill;

use App\Models\Bill;
use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserBillIndex
{
    use AsAction;

    public function handle()
    {
        $advertiser = Auth::guard('advertiser')->user();
        $bills = $advertiser->bills;
        $hasPending = Bill::whereAdvertiserId($advertiser->id)->whereStatus(Bill::PENDING)->exists();
        return view('advertisers.bills.list', compact('bills', 'hasPending'));
    }
}
