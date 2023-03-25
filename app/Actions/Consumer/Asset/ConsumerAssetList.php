<?php

namespace App\Actions\Consumer\Asset;

use App\Models\Asset;
use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerAssetList
{
    use AsAction;

    public function handle()
    {
        $consumer = Auth::guard('consumer')->user();
        $assets = $consumer->assets;
        $withdraw = Asset::whereConsumerId($consumer->id)->whereNotNull('status')->first();

        return view('consumers.asset', compact('assets', 'withdraw'));
    }
}
