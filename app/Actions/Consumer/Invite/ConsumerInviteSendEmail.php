<?php

namespace App\Actions\Consumer\Invite;

use App\Mail\ConsumerEmailInvite;
use App\Models\Invite;
use Lorisleiva\Actions\Concerns\AsAction;
use Mail;

class ConsumerInviteSendEmail
{
    use AsAction;

    public function handle(Invite $invite)
    {
        Mail::to($invite->email)->send(new ConsumerEmailInvite($invite));
    }
}
