<?php

namespace App\Actions\Admin\Design;

use App\Models\Design;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminDesignStore
{
    use AsAction;

    public function handle(Request $request)
    {
        $design = new Design();
        $design->code = date('Y') . '-' . sprintf("%'.05d", Design::count() + 1);
        $design->save();

        return back();
    }
}
