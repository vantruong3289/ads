<?php

namespace App\Actions\Admin;

use App\Models\Admin;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminUpdatePassword
{
    use AsAction;

    public function handle(Request $request)
    {
        $oldPassword = $request->input('old-password');
        $newPassword = $request->input('new-password');
        /** @var Admin $admin */
        $admin = Auth::guard('admin')->user();
        if (Hash::check($oldPassword, $admin->password)) {
            $admin->password = Hash::make($newPassword);
            $admin->save();
        }

        return back();
    }
}
