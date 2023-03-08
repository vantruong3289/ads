<?php

namespace App\Actions\Consumers;

use App\Models\Consumer;
use Auth;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateConsumer
{
    use AsAction;

    public function handle(Request $request)
    {
        $consumer = Auth::guard('consumer')->user();
        $input = $request->only('name', 'email');
        /** @var Consumer $consumer  */
        $consumer->update($input);

        return back();
    }
}
