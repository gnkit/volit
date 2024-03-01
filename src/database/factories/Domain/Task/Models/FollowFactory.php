<?php

namespace Database\Factories\Domain\Task\Models;

use Domain\Task\Models\Follow;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Domain\Task\Models\Follow>
 */
class FollowFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Follow::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'account_id' => fake()->numberBetween(1, 5),
            'task_id' => fake()->numberBetween(1, 10),
        ];
    }
}
