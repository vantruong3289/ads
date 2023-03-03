<?php

namespace App\Actions\Consumer;

use App\Models\Consumer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdatePasswordConsumer
{
    use AsAction;

    public function handle(Request $request)
    {
        /** @var Consumer $consumer */
        $consumer = Auth::guard('consumer')->user();
        $consumer->password = Hash::make($request->password);
        
        return $consumer;
    }
}
