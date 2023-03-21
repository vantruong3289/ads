<?php

namespace App\Actions\Admin\Design;

use App\Models\Design;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminDesignEditForm
{
    use AsAction;

    public function handle(Design $design)
    {
        return view('admins.designs.edit', compact('design'));
    }
}
