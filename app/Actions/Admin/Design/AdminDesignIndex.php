<?php

namespace App\Actions\Admin\Design;

use App\Models\Design;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminDesignIndex
{
    use AsAction;

    public function handle()
    {
        $designs = Design::all();
        return view('admins.designs.list', compact('designs'));
    }
}
