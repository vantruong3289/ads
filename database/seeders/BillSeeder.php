<?php

namespace Database\Seeders;

use App\Models\Bill;
use Illuminate\Database\Seeder;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bill::truncate();
        for ($i = 0; $i < 10; $i++) {
            Bill::factory()->create();
        }
    }
}
