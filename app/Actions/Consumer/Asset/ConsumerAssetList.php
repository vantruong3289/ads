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
        $assets = Asset::whereConsumerId($consumer->id)->get();

        return view('consumers.asset', compact('assets'));
    }
}
