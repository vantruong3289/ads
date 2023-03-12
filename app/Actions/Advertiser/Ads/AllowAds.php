<?php

namespace App\Actions\Ads;

use App\Models\Ads;
use App\Models\Advertiser;
use App\Models\Bill;
use Lorisleiva\Actions\Concerns\AsAction;

class AllowAds
{
    use AsAction;

    public function handle(Advertiser $advertiser)
    {
        $bills = Bill::whereAdvertiserId($advertiser->id)->whereStatus(Bill::PAID)->get();
        foreach ($bills as $bill) {
            Ads::whereIn('brand_id', $advertiser->brands->pluck('id'))
                ->whereCurrency($bill->currency)
                ->where('money', '<=', $bill->money)
                ->update(['allow' => true]);
        }
    }
}
