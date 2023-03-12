<?php

namespace App\Actions\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class SignInFormAdmin
{
    use AsAction;

    public function handle()
    {
        return view('admins.sign-in');
    }
}
