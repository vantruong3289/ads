<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class ConsumerFactory extends Factory
{

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => "consumer@ads.com",
            'password' => Hash::make('password'),
            'sex' => 1,
        ];
    }
}
