<?php

namespace App\Actions\Admin;

use Lorisleiva\Actions\Concerns\AsAction;

class AdminSignInForm
{
    use AsAction;

    public function handle()
    {
        return view('admins.sign-in');
    }
}
