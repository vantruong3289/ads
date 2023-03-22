<?php

namespace App\Actions\Admin\Account;

use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminAccountHome
{
    use AsAction;

    public function handle()
    {
        $admin = Auth::guard('admin')->user();
        return view('admins.home', compact('admin'));
    }
}
