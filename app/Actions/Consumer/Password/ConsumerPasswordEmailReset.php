<?php

namespace App\Actions\Consumer\Password;

use App\Mail\ConsumerEmailResetPassword;
use App\Models\Consumer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerPasswordEmailReset
{
    use AsAction;

    public function handle(Request $request)
    {
        $email = $request->email;
        $consumer = Consumer::whereEmail($email)->firstOrFail();
        Mail::to($email)->send(new ConsumerEmailResetPassword($consumer));
    }
}
