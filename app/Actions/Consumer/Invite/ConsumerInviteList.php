<?php

namespace App\Actions\Consumer\Invite;

use App\Models\Invite;
use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerInviteList
{
    use AsAction;

    public function handle()
    {
        $invites = Invite::whereConsumerId(Auth::guard('consumer')->id())->get();
        return view('consumers.invites.list', compact('invites'));
    }
}
