<?php

namespace App\Actions\Advertiser\Password;

use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserPasswordResetForm
{
    use AsAction;

    public function handle()
    {
        return view('advertisers.passwords.reset');
    }
}
