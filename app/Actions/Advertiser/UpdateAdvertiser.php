<?php

namespace App\Actions\Advertiser;

use App\Models\Advertiser;
use Auth;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateAdvertiser
{
    use AsAction;

    public function handle(Request $request)
    {
        /** @var Advertiser $advertiser */
        $advertiser = Auth::guard('advertiser')->user();
        $input = $request->input();
        $advertiser->update($input);

        return $advertiser;
    }
}
