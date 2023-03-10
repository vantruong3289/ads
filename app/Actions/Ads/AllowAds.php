<?php

namespace App\Actions\Ads;

use App\Models\Ads;
use App\Models\Advertiser;
use App\Models\Bill;
use Lorisleiva\Actions\Concerns\AsAction;

class AllowAds
{
    use AsAction;

    public function handle(Bill $bill)
    {
        $advertiser = $bill->advertiser;
        Ads::whereAdvertiserId($advertiser->id)->whereCurrency($bill->currency)
            ->where('money', '<=', $bill->money)
            ->update(['allow', true]);

        Ads::whereAdvertiserId($advertiser->id)->whereCurrency($bill->currency)
            ->where('money', '>', $bill->money)
            ->update(['allow', false]);
    }
}
