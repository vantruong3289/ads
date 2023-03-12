<?php

namespace App\Actions\Consumer;

use App\Models\Consumer;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdatePasswordConsumer
{
    use AsAction;

    public function handle(Request $request)
    {
        $oldPassword = $request->input('old-password');
        $newPassword = $request->input('new-password');
        /** @var Consumer $consumer */
        $consumer = Auth::guard('consumer')->user();
        if (Hash::check($oldPassword, $consumer->password)) {
            $consumer->password = Hash::make($newPassword);
            $consumer->save();
        }

        return back();
    }
}
