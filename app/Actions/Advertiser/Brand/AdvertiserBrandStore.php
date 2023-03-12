<?php

namespace App\Actions\Advertiser\Brand;

use App\Models\Brand;
use Auth;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserBrandStore
{
    use AsAction;

    public function handle(Request $request)
    {
        $advertiser = Auth::guard('advertiser')->user();
        $hasNoAds = Brand::whereAdvertiserId($advertiser->id)->doesntHave('adss')->exists();
        if ($hasNoAds) {
            return back();
        }

        $input = $request->only('name');
        $input['advertiser_id'] = $advertiser->id;
        $brand = Brand::create($input);

        return redirect("/advertisers/brands/{$brand->id}/edit");
    }
}
