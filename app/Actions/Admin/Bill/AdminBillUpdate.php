<?php

namespace App\Actions\Admin\Bill;

use App\Models\Bill;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminBillUpdate
{
    use AsAction;

    public function handle(Bill $bill, Request $request)
    {
        $bill->status = $request->status;
        $bill->save();

        // AllowAds::dispatch($bill->advertiser);

        return back();
    }
}
