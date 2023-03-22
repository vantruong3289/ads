<?php

namespace App\Actions\Advertiser\Password;

use App\Models\Advertiser;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserPasswordUpdate
{
    use AsAction;

    public function handle(Request $request)
    {
        $oldPassword = $request->input('old-password');
        $newPassword = $request->input('new-password');
        /** @var Advertiser $advertiser */
        $advertiser = Auth::guard('advertiser')->user();
        if (Hash::check($oldPassword, $advertiser->password)) {
            $advertiser->password = Hash::make($newPassword);
            $advertiser->save();
        }

        return back();
    }
}
