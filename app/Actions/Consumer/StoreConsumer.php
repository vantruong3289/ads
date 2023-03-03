<?php

namespace App\Actions\Consumer;

use App\Models\Consumer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreConsumer
{
    use AsAction;

    public function handle(Request $request)
    {
        $input = $request->input();
        $input['password'] = Hash::make($input['password']);
        $consumer = Consumer::create($input);
        
        return $consumer;
    }
}
