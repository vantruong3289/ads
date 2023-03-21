<?php

namespace App\Actions\Admin\Design;

use App\Models\Design;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminDesignIndex
{
    use AsAction;

    public function handle()
    {
        $designs = Design::withCount('ads')->get();
        return view('admins.designs.list', compact('designs'));
    }
}
