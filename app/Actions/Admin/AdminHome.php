<?php

namespace App\Actions\Admin;

use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminHome
{
    use AsAction;

    public function handle()
    {
        $admin = Auth::guard('admin')->user();
        return view('admins.home', compact('admin'));
    }
}
