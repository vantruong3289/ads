<?php

namespace App\Actions\Consumer;

use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerSignInForm
{
    use AsAction;

    public function handle()
    {
        return view('consumers.sign-in');
    }
}
