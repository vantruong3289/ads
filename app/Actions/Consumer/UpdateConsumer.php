<?php

namespace App\Actions\Consumer;

use App\Models\Consumer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateConsumer
{
    use AsAction;

    public function handle(Request $request)
    {
        /** @var Consumer $consumer */
        $consumer = Auth::guard('consumer')->user();
        $input = $request->input();
        $consumer->update($input);

        return $consumer;
    }
}
