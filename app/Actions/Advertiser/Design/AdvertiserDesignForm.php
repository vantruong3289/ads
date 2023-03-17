<?php

namespace App\Actions\Advertiser\Design;

use App\Models\Ads;
use App\Models\Design;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserDesignForm
{
    use AsAction;

    public function handle(Ads $ads, Design $design)
    {
        return view("advertisers.ads.design", compact('design', 'ads'));
    }
}
