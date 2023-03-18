<?php

namespace App\Actions\System;

use App\Models\Ads;
use App\Models\Bill;
use Lorisleiva\Actions\Concerns\AsAction;

class SystemAllowAds
{
    use AsAction;

    public function handle(Bill $bill)
    {
        Ads::whereIn('brand_id', $bill->advertiser->brands->pluck('id'))
            ->whereCurrency($bill->currency)
            ->update(['allow' => true]);

    }
}
