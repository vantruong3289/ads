<?php

namespace App\Actions\Bill;

use App\Models\Bill;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class CreatePostBill
{
    use AsAction;

    public function handle(Request $request)
    {
        $advertiser = Auth::guard('advertiser')->user();
        $input = $request->only('money', 'currency');
        $input['time'] = Carbon::now();
        $input['advertiser_id'] = $advertiser->id;
        $input['code'] = date('Ymd') . '-' . sprintf("%'.05d", Bill::count() + 1);

        $bill = Bill::create($input);

        return back();
    }
}
