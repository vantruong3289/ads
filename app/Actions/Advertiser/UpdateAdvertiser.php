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
        $advertiser = Auth::guard('advertiser')->user();
        $input = $request->only('name', 'email');
        /** @var Advertiser $advertiser  */
        $advertiser->update($input);
        if ($request->hasFile('avatar')) {
            $advertiser->addMedia($request->file('avatar'))->toMediaCollection('avatar');
        }
        return back();
    }
}
