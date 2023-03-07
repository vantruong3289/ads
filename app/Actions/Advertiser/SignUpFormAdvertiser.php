<?php

namespace App\Actions\Advertiser;

use Lorisleiva\Actions\Concerns\AsAction;

class SignUpFormAdvertiser
{
    use AsAction;

    public function handle()
    {
        return view('advertiser.sign-up');
    }
}
