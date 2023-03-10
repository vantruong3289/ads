<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Design;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdsFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'content' => $this->faker->realText,
            'active' => $this->faker->boolean,
            'currency' => 'VND',
            'seconds' => $this->faker->numberBetween(10, 20),
            'money' => $this->faker->numberBetween(10, 20),
            'voucher' => $this->faker->numberBetween(0, 9) / 100,
            'brand_id' => Brand::inRandomOrder()->first()?->id,
            'design_id' => Design::inRandomOrder()->first()?->id,
        ];
    }
}
