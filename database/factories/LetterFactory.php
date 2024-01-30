<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Letter>
 */
class LetterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => \App\Models\Customer::factory()->create()->id,
            'topic' => fake()->words(3, true),
            'description' => fake()->words(100, true),
            'status' => 1,
            'created_by' => fake()->randomNumber(1),
            'updated_by' => fake()->randomNumber(1),
        ];
    }
}
