<?php

namespace App\Actions\Ads;

use App\Models\Ads;
use Lorisleiva\Actions\Concerns\AsAction;

class EditFormAds
{
    use AsAction;

    public function handle(Ads $ads)
    {
        return view('ads.edit', compact('ads'));
    }
}
