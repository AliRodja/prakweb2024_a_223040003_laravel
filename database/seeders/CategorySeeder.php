<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'red',
        ]);

        Category::create([
            'name' => 'Ui/Ux Design',
            'slug' => 'ui-ux',
            'color' => 'blue',
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'green',
        ]);

        Category::create([
            'name' => 'Data Analysis',
            'slug' => 'data-analysis',
            'color' => 'yellow',
        ]);

    }
}
