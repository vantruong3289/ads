<?php

namespace App\Actions\Advertiser\Password;

use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserPasswordForgot
{
    use AsAction;

    public function handle()
    {
        return view('advertisers.forgot-password');
    }
}
