<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(RolesAndPermissionsSeeder::class);

        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ])->assignRole('admin');

        \App\Models\User::factory(10)->create()->each(function ($user) {
            $user->assignRole('customer');
        });

        \App\Models\MealPlan::factory(10)->create();
        \App\Models\Testimonial::factory(10)->create();
        \App\Models\SubscriptionPlan::factory(3)->create();
        \App\Models\Subscription::factory(20)->create();
    }
}
