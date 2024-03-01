<?php

namespace Database\Factories\Domain\Task\Models;

use Domain\Task\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Domain\Task\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'description' => fake()->text(),
            'category_id' => fake()->numberBetween(1, 3),
            'category_help_id' => fake()->numberBetween(1, 3),
            'account_id' => fake()->numberBetween(1, 10),
            'start_date' => now(),
            'finish_date' => now(),
            'status' => $this->faker->randomElement(['published', 'draft', 'pending', 'cancelled', 'successful']),
        ];
    }
}
