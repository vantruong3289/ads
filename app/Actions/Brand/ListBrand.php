<?php

namespace App\Actions\Brand;

use Auth;
use Lorisleiva\Actions\Concerns\AsAction;

class ListBrand
{
    use AsAction;

    public function handle()
    {
        $advertiser = Auth::guard('advertiser')->user();
        $brands = $advertiser->brands;

        return view('brands.list', compact('brands'));
    }
}
