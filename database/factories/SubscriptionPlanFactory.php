<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubscriptionPlan>
 */
class SubscriptionPlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => ucfirst(fake()->word()) . ' Plan',
            'description' => fake()->sentence(),
            'price' => fake()->randomFloat(2, 10, 200),
            'duration_days' => fake()->randomElement([7, 30, 90, 365]),

        ];
    }
}
