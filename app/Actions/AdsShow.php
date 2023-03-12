<?php

namespace App\Actions;

use App\Models\Ads;
use Lorisleiva\Actions\Concerns\AsAction;

class AdsShow
{
    use AsAction;

    public function handle()
    {
        $next = Ads::orderBy('money')
            ->where('active', true)
            ->where('allow', true)
            ->orderBy('voucher')
            ->paginate(1);
        $ads = $next->first();

        if ($ads) {
            return view('welcome', compact('ads', 'next'));
        }

        return view('about');
    }
}
