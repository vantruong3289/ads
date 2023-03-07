<?php

namespace App\Actions\Advertiser;

use Auth;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class SignInPostAdvertiser
{
    use AsAction;

    public function handle(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('advertiser')->attempt($credentials)) {
            return redirect('/advertisers/home');
        }

        return back();
    }
}
