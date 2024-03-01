<?php

namespace Database\Factories\Domain\Task\Models;

use Domain\Task\Models\Bonus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Domain\Task\Models\Bonus>
 */
class BonusFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Bonus::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'icon' => 'icon',
        ];
    }
}
