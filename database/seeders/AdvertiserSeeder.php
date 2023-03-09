<?php

namespace Database\Seeders;

use App\Models\Advertiser;
use Illuminate\Database\Seeder;

class AdvertiserSeeder extends Seeder
{

    public function run()
    {
        Advertiser::truncate();
        $advertisers = Advertiser::factory(1)->create();
        $advertisers->each(function (Advertiser $advertiser) {
            $advertiser->addMediaFromUrl('https://i.pravatar.cc/80')->toMediaCollection('avatar');
        });
    }
}
