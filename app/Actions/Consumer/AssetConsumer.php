<?php

namespace App\Actions\Consumer;

use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class AssetConsumer
{
    use AsAction;

    public function handle()
    {
        $consumer = Auth::guard('consumer')->user();
        $assets = $consumer->assets;

        return view('consumers.asset', compact('assets'));
    }
}
