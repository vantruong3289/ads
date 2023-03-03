<?php

namespace Database\Factories;

use App\Models\Advertiser;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{

    public function definition()
    {
        return [
            'name' => $this->faker->jobTitle,
            'email' => $this->faker->email,
            'address' => $this->faker->address,
            'about' => $this->faker->paragraph,
            'website' => $this->faker->url,
            'map' => $this->faker->url,
            'phone' => $this->faker->phoneNumber,

            'advertiser_id' => Advertiser::inRandomOrder()->first()->id,
        ];
    }
}
