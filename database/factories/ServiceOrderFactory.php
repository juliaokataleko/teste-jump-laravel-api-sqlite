<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceOrder>
 */
class ServiceOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "vehiclePlate" => $this->faker->numberBetween(1000000,9999999),
            "entryDateTime" => $this->faker->dateTimeThisMonth(),
            "priceType" => "U",
            "price" => (float) $this->faker->numberBetween(100,9000),
            "userId" => User::factory()
        ];
    }
}
