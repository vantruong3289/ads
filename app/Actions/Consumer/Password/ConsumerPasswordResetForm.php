<?php

namespace App\Actions\Consumer\Password;

use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerPasswordResetForm
{
    use AsAction;

    public function handle()
    {
        return view('consumers.passwords.reset');
    }
}
