<?php

namespace App\Actions\Consumer\Invite;

use App\Models\Consumer;
use App\Models\Invite;
use Auth;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerInviteStore
{
    use AsAction;

    public function handle(Request $request)
    {
        $email = $request->email;
        if (Consumer::whereEmail($email)->exists()) {
            return;
        }
        $consumer = Auth::guard('consumer')->user();
        Invite::firstOrCreate(['email' => $email, 'consumer_id' => $consumer->id]);
        ConsumerInviteSendEmail::dispatch();
        return back();
    }
}
