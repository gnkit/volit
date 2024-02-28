<?php

namespace Database\Factories\Domain\Account\Models;

use Domain\Account\Models\Account;
use Domain\Account\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Domain\Account\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Account::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create()->id,
            'role_id' => fake()->numberBetween(2, 3),
            'fullname' => fake()->name(),
            'organization' => fake()->company(),
            'location' => fake()->address(),
            'avatar' => fake()->imageUrl(),
            'status' => $this->faker->randomElement(['ban', 'active', 'unverified']),
            'activity_at' => now(),
        ];
    }
}
