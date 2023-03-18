<?php

namespace App\Actions\Advertiser\Design;

use App\Models\Ads;
use App\Models\Design;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserDesignUpdate
{
    use AsAction;

    public function handle(Ads $ads, Design $design, Request $request)
    {
        $input = $request->input('data');
        $json = json_encode($input, );
        $ads->data = $json;
        $ads->save();
        return back();
    }
}
