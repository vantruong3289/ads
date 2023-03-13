<?php

namespace App\Actions\Advertiser\Ads;

use App\Models\Ads;
use Auth;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserAdsStore
{
    use AsAction;

    public function handle(Request $request)
    {
        $input = $request->only('name', 'brand_id');
        $ads = Ads::create($input);

        return redirect("adss/{$ads->id}/edit");
    }
}
