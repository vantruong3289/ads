<?php

namespace Database\Seeders;

use App\Models\Consumer;
use Illuminate\Database\Seeder;

class ConsumerSeeder extends Seeder
{

    public function run()
    {
        Consumer::truncate();
        $consumers = Consumer::factory(1)->create();
        $consumers->each(function (Consumer $consumer) {
            $consumer->addMediaFromUrl('https://i.pravatar.cc/80')->toMediaCollection('avatar');
        });
    }
}
