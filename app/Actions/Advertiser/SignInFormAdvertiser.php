<?php

namespace App\Actions\Advertiser;

use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class SignInFormAdvertiser
{
    use AsAction;

    public function handle(Request $request)
    {
        return view('advertisers.sign-in');
    }
}
