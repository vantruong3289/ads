<?php

namespace App\Actions\Advertiser\Design;

use App\Models\Ads;
use App\Models\Design;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserDesignIndex
{
    use AsAction;

    public function handle(Ads $ads)
    {
        $designs = Design::query()->withCount('ads')->get();

        return view('advertisers.designs.list', compact('designs', 'ads'));
    }
}
