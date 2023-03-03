<?php

namespace Database\Seeders;

use App\Models\Ads;
use Illuminate\Database\Seeder;

class AdsSeeder extends Seeder
{

    public function run()
    {
        Ads::query()->delete();
        $adss = Ads::factory(10)->create();
        $adss->each(function (Ads $ads) {
            $ads->addMediaFromUrl('https://source.unsplash.com/random/800x500')->toMediaCollection('ads-desktop');
            $ads->addMediaFromUrl('https://source.unsplash.com/random/600x400')->toMediaCollection('ads-mobile');
        });
    }
}
