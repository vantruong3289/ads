<?php

namespace App\Actions\Advertiser\Design;

use App\Models\Ads;
use App\Models\Design;
use Lorisleiva\Actions\Concerns\AsAction;

class AdvertiserDesignChoice
{
    use AsAction;

    public function handle(Ads $ads, Design $design)
    {
        $ads->design_id = $design->id;
        $ads->data = $design->data;
        $ads->save();

        return redirect("advertisers/ads/{$ads->id}/designs/{$design->id}/form");
    }
}
