<?php

namespace App\Actions\Advertiser\Bill;

use App\Models\Bill;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserBillStore
{
    use AsAction;

    public function handle(Request $request)
    {
        $advertiser = Auth::guard('advertiser')->user();
        $hasPending = Bill::whereAdvertiserId($advertiser->id)->whereStatus(Bill::PENDING)->exists();
        if ($hasPending) {
            return back();
        }

        $input = $request->only('money', 'currency');
        $input['time'] = Carbon::now();
        $input['advertiser_id'] = $advertiser->id;
        $input['code'] = date('Ymd') . '-' . sprintf("%'.05d", Bill::count() + 1);

        $bill = Bill::create($input);

        return back();
    }
}
