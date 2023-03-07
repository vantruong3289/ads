<?php

namespace App\Actions\Consumer;

use App\Models\Consumer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Lorisleiva\Actions\Concerns\AsAction;

class SignUpPostConsumer
{
    use AsAction;

    public function handle(Request $request)
    {
        $input = $request->only('name', 'email', 'password');
        $input['password'] = Hash::make($input['password']);

        $consumer = Consumer::create($input);
        Auth::login($consumer);

        return redirect('/consumers/home');
    }
}
