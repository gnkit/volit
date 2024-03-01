<?php

namespace Database\Seeders;

use Domain\Task\Models\Follow;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Follow::factory()
            ->count(10)
            ->create();
    }
}
