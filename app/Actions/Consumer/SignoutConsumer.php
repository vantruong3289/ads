<?php

namespace App\Actions\Consumer;

use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class SignoutConsumer
{
    use AsAction;

    public function handle()
    {
        Auth::guard('consumer')->logout();
        return redirect('consumers\sign-in');
    }
}
