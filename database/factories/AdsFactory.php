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
            'name' => $this->faker->jobTitle,
            'active' => $this->faker->boolean,
            'currency' => 'VND',
            'seconds' => $this->faker->numberBetween(10, 20),
            'money' => $this->faker->numberBetween(10, 20),
            'brand_id' => Brand::inRandomOrder()->first()?->id,
            'design_id' => Design::inRandomOrder()->first()?->id,
        ];
    }
}
