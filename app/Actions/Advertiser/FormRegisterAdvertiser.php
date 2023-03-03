<?php

namespace App\Actions\Advertiser;

use Lorisleiva\Actions\Concerns\AsAction;

class FormRegisterAdvertiser
{
    use AsAction;

    public function handle()
    {
        return view('advertiser.create');
    }
}
