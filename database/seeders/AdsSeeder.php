<?php

namespace Database\Seeders;

use App\Models\Ads;
use Illuminate\Database\Seeder;

class AdsSeeder extends Seeder
{

    public function run()
    {
        Ads::query()->delete();
        $adss = Ads::factory(1)->create();
        $adss->each(function (Ads $ads) {
            // $ads->addMediaFromUrl('https://source.unsplash.com/random/800x500')->toMediaCollection('photos');
            // $ads->addMediaFromUrl('http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4')->toMediaCollection('video');
        });
    }
}
