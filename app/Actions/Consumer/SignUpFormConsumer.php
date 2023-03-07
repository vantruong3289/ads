<?php

namespace App\Actions\Consumer;

use App\Models\Consumer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class SignUpFormConsumer
{
    use AsAction;

    public function handle(Request $request)
    {
        return view('consumers.sign-up');
    }
}
