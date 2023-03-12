<?php

namespace App\Actions\Admin;

use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminSignout
{
    use AsAction;

    public function handle()
    {
        Auth::guard('admin')->logout();
        return redirect('admins\sign-in');
    }
}
