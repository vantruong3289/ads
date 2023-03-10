<?php

namespace App\Actions\Watch;

use App\Models\Ads;
use App\Models\Asset;
use App\Models\Bill;
use App\Models\Watch;
use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class ClickAds
{
    use AsAction;

    public function handle(Ads $ads)
    {
        $consumer = Auth::guard('consumer')->user();
        if (!$consumer) {
            return;
        }

        $attributes = ['consumer_id' => $consumer->id, 'brand_id' => $ads->brand_id, 'currency' => $ads->currency];
        $asset = Asset::firstOrCreate($attributes);

        $bill = Bill::whereAdvertiserId($ads->brand->advertiser_id)
            ->whereCurrency($ads->currency)
            ->where('money', '>=', $ads->money)
            ->first();

        if ($bill) {
            $bill->money -= $ads->money;
            $bill->save();
            Watch::create([
                'consumer_id' => $consumer->id,
                'brand_id' => $ads->brand_id,
                'ads_id' => $ads->id,
                'currency' => $ads->currency,
                'money' => $ads->money,
                'status' => Watch::WAITING,
            ]);

            $asset->money += $ads->money;
            $asset->save();
        }

        if (!$bill) {
            $ads->update(['allow' => false]);
        }
    }
}
