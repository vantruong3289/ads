<?php

namespace App\Actions\Admin\Asset;

use App\Models\Asset;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminAssetList
{
    use AsAction;

    public function handle()
    {
        $assets = Asset::get();
        return view('admins.assets.list', compact('assets'));
    }
}
