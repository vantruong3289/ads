<?php

namespace App\Actions\Admin;

use Auth;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class SignInPostAdmin
{
    use AsAction;

    public function handle(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('/admins/home');
        }

        return back();
    }
}
