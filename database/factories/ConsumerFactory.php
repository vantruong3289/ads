<?php

namespace Database\Factories;

use App\Enums\SexEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;


class ConsumerFactory extends Factory
{
    
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => Hash::make('password'),
            'sex' => $this->faker->randomElement(SexEnum::cases()),
        ];
    }
}
