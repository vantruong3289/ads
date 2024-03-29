<?php

namespace App\Actions\Consumer\Ads;

use App\Models\Ads;
use Lorisleiva\Actions\Concerns\AsAction;

class ConsumerAdsShow
{
    use AsAction;

    public function handle()
    {
        $next = Ads::orderBy('money')
            ->where('active', true)
            ->whereHas('design')
            ->where('allow', true)
            ->paginate(1);
        $ads = $next->first();
        if ($ads) {
            $design = $ads->design;
            return view('welcome', compact('ads', 'design', 'next'));
        }

        return view('about');
    }
}
