<?php

namespace Database\Factories;

use App\Models\Advertiser;
use App\Models\Bill;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bill>
 */
class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'advertiser_id' => Advertiser::inRandomOrder()->first()->id,
            'code' => date('Ymd') . '-' . sprintf("%'.05d", Bill::count() + 1),
            'currency' => 'VND',
            'money' => $this->faker->numberBetween(1, 10) * 100000,
            'time' => $this->faker->dateTime,
        ];
    }
}
