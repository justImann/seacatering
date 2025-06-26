<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start = $this->faker->dateTimeBetween('-1 month', 'now');
        return [
            'user_id' => \App\Models\User::factory(),
            'subscription_plan_id' => \App\Models\SubscriptionPlan::factory(),
            'starts_at' => $start->format('Y-m-d'),
            'ends_at' => fake()->dateTimeBetween($start, '+1 year')->format('Y-m-d'),
            'status' => fake()->randomElement(['active','cancelled','expired']),
        ];
    }
}
