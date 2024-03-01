<?php

namespace Database\Seeders;

use Domain\Task\Models\Bonus;
use Domain\Task\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BonusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bonus::factory()
            ->count(1)
            ->state(new Sequence([
                'name' => 'Пікір',
                'slug' => Str::slug('Пікір'),
            ],
            ))->hasAttached(Task::where('id', fake()->numberBetween(1, 10))->first())
            ->create();

        Bonus::factory()
            ->count(1)
            ->state(new Sequence([
                'name' => 'Көмек',
                'slug' => Str::slug('Көмек'),
            ],
            ))->hasAttached(Task::where('id', fake()->numberBetween(1, 10))->first())
            ->create();

        Bonus::factory()
            ->count(1)
            ->state(new Sequence([
                'name' => 'Сыйақы',
                'slug' => Str::slug('Сыйақы'),
            ],
            ))->hasAttached(Task::where('id', fake()->numberBetween(1, 10))->first())
            ->create();
    }
}
