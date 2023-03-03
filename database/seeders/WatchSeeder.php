<?php

namespace Database\Seeders;

use App\Models\Watch;
use Illuminate\Database\Seeder;

class WatchSeeder extends Seeder
{

    public function run()
    {
        Watch::truncate();
        // Watch::factory(20)->create();
    }
}
