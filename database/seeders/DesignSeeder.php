<?php

namespace Database\Seeders;

use App\Models\Design;
use Illuminate\Database\Seeder;

class DesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Design::truncate();
        for ($i = 0; $i < 10; $i++) {
            Design::factory(1)->create();
        }
    }
}
