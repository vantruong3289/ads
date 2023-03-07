<?php

namespace App\Actions\Ads;

use App\Models\Ads;
use Lorisleiva\Actions\Concerns\AsAction;

class WelcomeAction
{
    use AsAction;

    public function handle()
    {
        $next = Ads::orderBy('money')->orderBy('voucher')->paginate(1);
        $ads = $next->first();

        return view('ads.welcome', compact('ads', 'next'));
    }
}
