<?php

namespace Database\Factories;

use App\Enums\WatchEnum;
use App\Models\Ads;
use App\Models\Brand;
use App\Models\Consumer;
use Illuminate\Database\Eloquent\Factories\Factory;

class WatchFactory extends Factory
{

    public function definition()
    {
        return [
            'consumer_id' => Consumer::inRandomOrder()->first()->id,
            'brand_id' => Brand::inRandomOrder()->first()->id,
            'ads_id' => Ads::inRandomOrder()->first()->id,
            'money' => $this->faker->numberBetween(1000, 10000),
            'voucher' => $this->faker->numberBetween(1, 10),
            'status' => WatchEnum::WAITING,
        ];
    }
}
