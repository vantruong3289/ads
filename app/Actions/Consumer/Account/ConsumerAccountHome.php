<?php

namespace App\Actions\Consumer\Account;

use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerAccountHome
{
    use AsAction;

    public function handle()
    {
        $consumer = Auth::guard('consumer')->user();
        return view('consumers.home', compact('consumer'));
    }
}
