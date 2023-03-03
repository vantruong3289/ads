<?php

namespace App\Actions\Watch;

use App\Enums\WatchEnum;
use App\Models\Ads;
use App\Models\Asset;
use App\Models\Watch;
use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class ClickAds
{
    use AsAction;

    public function handle(Ads $ads)
    {
        if (Auth::guard('consumer')->check()) {
            $consumer = Auth::guard('consumer')->user();
            $watch = Watch::create([
                'consumer_id' => $consumer->id,
                'brand_id' => $ads->brand_id,
                'ads_id' => $ads->id,
                'currency' => $ads->currency,
                'money' => $ads->money,
                'voucher' => $ads->voucher,
                'status' => WatchEnum::WAITING,
            ]);

            $asset = Asset::query()->firstOrCreate(['consumer_id' => $consumer->id, 'brand_id' => $ads->brand_id]);
            if ($watch->money) {
                $asset->money += $watch->money;
            }
            if ($watch->voucher) {
                $asset->voucher += $watch->voucher;
            }

            $asset->save();
        }
    }
}
