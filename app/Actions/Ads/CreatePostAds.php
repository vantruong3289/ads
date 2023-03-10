<?php

namespace App\Actions\Ads;

use App\Models\Ads;
use Auth;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class CreatePostAds
{
    use AsAction;

    public function handle(Request $request)
    {
        $input = $request->only('title', 'brand_id');
        $input['advertiser_id'] = Auth::guard('advertiser')->user()->id;
        $ads = Ads::create($input);

        return redirect("adss/{$ads->id}/edit");
    }
}
