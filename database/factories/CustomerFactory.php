<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::query()
            ->select('id')
            ->inRandomOrder()
            ->first()
            ->id;

        return [
            'salutation' => fake()->randomElement(['Firma', 'Herr', 'Frau']),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'street' => fake()->streetAddress(),
            'street_number' => fake()->randomNumber(1),
            'postalcode' => fake()->randomNumber(5),
            'city' => fake()->city(),
            'country' => fake()->country(),
            'created_by' => $user,
            'updated_by' => $user
        ];
    }
}
