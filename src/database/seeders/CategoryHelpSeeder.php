<?php

namespace Database\Seeders;

use Domain\Task\Models\CategoryHelp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryHelpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryHelp::create([
            'name' => 'Үй жануарлары',
            'slug' => Str::slug('Үй жануарлары'),
            'icon' => 'icon',
        ]);
        CategoryHelp::create([
            'name' => 'Төтенше жағдай',
            'slug' => Str::slug('Төтенше жағдай'),
            'icon' => 'icon',
        ]);
        CategoryHelp::create([
            'name' => 'Қарттар',
            'slug' => Str::slug('Қарттар'),
            'icon' => 'icon',
        ]);
    }
}
