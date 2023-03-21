<?php

namespace App\Actions\Consumer\Password;

use App\Models\Consumer;
use Hash;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerPasswordReset
{
    use AsAction;

    public function handle(Request $request)
    {
        $id = $request->query('id');
        $consumer = Consumer::find($id);
        $password = $request->password;
        $consumer->password = Hash::make($password);
        $consumer->save();

        return redirect('consumers/sign-in');
    }
}
