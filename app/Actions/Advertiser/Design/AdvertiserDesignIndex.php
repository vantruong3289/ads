<?php

namespace App\Actions\Advertiser\Design;

use App\Models\Ads;
use App\Models\Design;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserDesignIndex
{
    use AsAction;

    public function handle(Ads $ads, Request $request)
    {
        $designs = Design::whereActive(true)->withCount('ads')
            ->when($request->tags, function ($q, $val) {
                $val = explode(", ", $val);
                $q->withAnyTags($val);
            })
            ->get();

        return view('advertisers.designs.list', compact('designs', 'ads'));
    }
}
