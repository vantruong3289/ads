<?php

namespace App\Actions\Consumer;

use Lorisleiva\Actions\Concerns\AsAction;

class SignInFormConsumer
{
    use AsAction;

    public function handle()
    {
        return view('consumers.signin');
    }
}
