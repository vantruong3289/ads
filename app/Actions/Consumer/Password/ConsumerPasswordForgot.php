<?php

namespace App\Actions\Consumer\Password;

use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerPasswordForgot
{
    use AsAction;

    public function handle()
    {
        return view('consumers.forgot-password');
    }
}
