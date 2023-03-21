<?php

namespace App\Actions\Advertiser\Password;

use App\Models\Advertiser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserPasswordReset
{
    use AsAction;

    public function handle(Request $request)
    {
        $id = $request->query('id');
        $advertiser = Advertiser::find($id);
        $password = $request->password;
        $advertiser->password = Hash::make($password);
        $advertiser->save();

        return redirect('advertisers/sign-in');
    }
}
