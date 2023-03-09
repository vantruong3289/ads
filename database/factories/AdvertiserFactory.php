<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdvertiserFactory extends Factory
{

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => 'advertiser@ads.com',
            'password' => Hash::make('password'),
            'sex' => 1,
        ];
    }
}
