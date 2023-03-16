<?php

namespace App\Actions\Advertiser\Design;

use App\Models\Design;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserDesignForm
{
    use AsAction;

    public function handle(Design $design)
    {
        return view("designs.{$design->code}.form", compact('design'));
    }
}
