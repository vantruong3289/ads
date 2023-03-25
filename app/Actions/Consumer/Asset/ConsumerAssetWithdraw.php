<?php

namespace App\Actions\Consumer\Asset;

use App\Models\Asset;
use Auth;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerAssetWithdraw
{
    use AsAction;

    public function handle(Request $request)
    {
        $consumer = Auth::guard('consumer')->user();
        $asset = Asset::whereConsumerId($consumer->id)->whereCurrency($request->currency)->first();
        $asset->withdraw = $request->withdraw;
        $asset->status = Asset::WAITING;

        $asset->save();

        return back();
    }
}
