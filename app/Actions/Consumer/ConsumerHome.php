<?php

namespace App\Actions\Consumer;

use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerHome
{
    use AsAction;

    public function handle()
    {
        $consumer = Auth::guard('consumer')->user();
        return view('consumers.home', compact('consumer'));
    }
}
