<?php

namespace App\Actions\Consumer\SignUp;

use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerSignUpForm
{
    use AsAction;

    public function handle(Request $request)
    {
        return view('consumers.sign-up');
    }
}
