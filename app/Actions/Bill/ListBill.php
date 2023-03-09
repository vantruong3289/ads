<?php

namespace App\Actions\Bill;

use App\Models\Bill;
use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class ListBill
{
    use AsAction;

    public function handle()
    {
        $advertiser = Auth::guard('advertiser')->user();
        $bills = $advertiser->bills;
        $hasPending = Bill::whereAdvertiserId($advertiser->id)->whereStatus(Bill::PEDING)->exists();
        return view('bills.list', compact('bills', 'hasPending'));
    }
}
