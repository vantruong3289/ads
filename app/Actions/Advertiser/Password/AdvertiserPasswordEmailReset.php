<?php

namespace App\Actions\Advertiser\Password;

use App\Mail\AdvertiserEmailResetPassword;
use App\Models\Advertiser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserPasswordEmailReset
{
    use AsAction;

    public function handle(Request $request)
    {
        $email = $request->email;
        $advertiser = Advertiser::whereEmail($email)->firstOrFail();
        Mail::to($email)->send(new AdvertiserEmailResetPassword($advertiser));
    }
}
