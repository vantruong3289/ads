<?php

namespace App\Actions\Consumer\SignUp;

use App\Models\Consumer;
use App\Models\Invite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerSignUpPost
{
    use AsAction;

    public function handle(Request $request)
    {
        $input = $request->only('name', 'email', 'password');
        $input['password'] = Hash::make($input['password']);

        $consumer = Consumer::create($input);
        Auth::login($consumer);

        if ($request->has('id')) {
            $invite = Invite::find($request->id);
            $invite->status = Invite::SUCCESS;
            $invite->save();
        }

        return redirect('/consumers/home');
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'min:8', 'unique:consumers'],
        ];
    }
}
