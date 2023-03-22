<?php

namespace App\Actions\Consumer\Account;

use App\Models\Consumer;
use Auth;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerAccountUpdate
{
    use AsAction;

    public function handle(Request $request)
    {
        $consumer = Auth::guard('consumer')->user();
        $input = $request->only('name', 'email', 'sex');
        /** @var Consumer $consumer  */
        $consumer->update($input);
        if ($request->hasFile('avatar')) {
            $consumer->addMedia($request->file('avatar'))->toMediaCollection('avatar');
        }
        return back();
    }
}
