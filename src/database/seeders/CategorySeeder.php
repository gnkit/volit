<?php

namespace Database\Seeders;

use Domain\Task\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Сайт жасау',
            'slug' => Str::slug('Сайт жасау'),
            'icon' => 'icon',
        ]);
        Category::create([
            'name' => 'Фото, видео',
            'slug' => Str::slug('Фото, видео'),
            'icon' => 'icon',
        ]);
        Category::create([
            'name' => 'Құқық',
            'slug' => Str::slug('Құқық'),
            'icon' => 'icon',
        ]);
    }
}
