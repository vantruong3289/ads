<?php

namespace App\Actions\Admin\Account;

use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminAccountSignout
{
    use AsAction;

    public function handle()
    {
        Auth::guard('admin')->logout();
        return redirect('admins\sign-in');
    }
}
