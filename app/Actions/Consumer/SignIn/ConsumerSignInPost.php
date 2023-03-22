<?php

namespace App\Actions\Consumer\SignIn;

use Auth;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerSignInPost
{
    use AsAction;

    public function handle(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('consumer')->attempt($credentials)) {
            return redirect('/consumers/home');
        }

        return back();
    }
}
