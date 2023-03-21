<?php

namespace App\Actions\Admin\Design;

use App\Models\Design;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminDesignUpdate
{
    use AsAction;

    public function handle(Design $design, Request $request)
    {
        $design->active = $request->active;
        $design->save();

        return back();
    }
}
