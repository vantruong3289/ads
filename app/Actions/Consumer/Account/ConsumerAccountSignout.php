<?php

namespace App\Actions\Consumer\Account;

use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerAccountSignout
{
    use AsAction;

    public function handle()
    {
        Auth::guard('consumer')->logout();
        return redirect('consumers\sign-in');
    }
}
