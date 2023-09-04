<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerMessage>
 */
class CustomerMessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Name' => $this->faker->name(),
            'Email' => $this->faker->safeEmail(),
            'Phone' => $this->faker->phoneNumber(),
            'Company' => $this->faker->name(),
        ];
    }
}
