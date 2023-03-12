<?php

namespace App\Actions\Advertiser;

use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserSignUpForm
{
    use AsAction;

    public function handle()
    {
        return view('advertisers.sign-up');
    }
}
