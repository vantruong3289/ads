<?php

namespace App\Actions\Consumer\Watch;

use App\Models\Ads;
use App\Models\Asset;
use App\Models\Bill;
use App\Models\Watch;
use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerWatchStore
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
            ->where('money', '>', 0)
            ->orderBy('money', 'desc')
            ->first();

        if ($bill) {
            $sub = $bill->money > $ads->money ? $ads->money : $bill->money;
            $bill->money -= $sub;
            $bill->save();
            Watch::create([
                'consumer_id' => $consumer->id,
                'brand_id' => $ads->brand_id,
                'ads_id' => $ads->id,
                'currency' => $ads->currency,
                'money' => $sub,
                'status' => Watch::WAITING,
            ]);

            $asset->money += $sub;
            $asset->view++;
            $asset->save();
        }

        if (!$bill) {
            $ads->update(['allow' => false]);
        }
    }
}
