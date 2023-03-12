<?php

namespace App\Actions\Admin;

use App\Models\Admin;
use Auth;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateAdmin
{
    use AsAction;

    public function handle(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        $input = $request->only('name', 'email', 'sex');
        /** @var Admin $admin  */
        $admin->update($input);
        if ($request->hasFile('avatar')) {
            $admin->addMedia($request->file('avatar'))->toMediaCollection('avatar');
        }
        return back();
    }
}
