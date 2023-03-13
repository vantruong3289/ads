<?php

namespace Database\Factories;

use App\Models\Design;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Design>
 */
class DesignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->title,
            'code' => date('Y') . '-' . sprintf("%'.05d", Design::count() + 1),
        ];
    }
}
