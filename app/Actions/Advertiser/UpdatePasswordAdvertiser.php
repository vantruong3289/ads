<?php

namespace App\Actions\Advertiser;

use App\Models\Advertiser;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdatePasswordAdvertiser
{
    use AsAction;

    public function handle(Request $request)
    {
        /** @var Advertiser $advertiser */
        $advertiser = Auth::guard('advertiser')->user();
        $password = Hash::make($request->password);

        $advertiser->password = $password;
        $advertiser->save();

        return $advertiser;
    }
}
