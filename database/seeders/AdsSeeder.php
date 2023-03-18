<?php

namespace Database\Seeders;

use App\Models\Ads;
use Illuminate\Database\Seeder;

class AdsSeeder extends Seeder
{

    public function run()
    {
        Ads::query()->delete();
        $adss = Ads::factory(2)->create();
    }
}
