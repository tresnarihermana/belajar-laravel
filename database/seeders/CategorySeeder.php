<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'Machine learing',
            'slug' => 'machine-learning',
            'color' => 'blue'
        ]);
        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'color' => 'green'
        ]);
        Category::create([
            'name' => 'Web Protection',
            'slug' => 'web-protection',
            'color' => 'cyan'
        ]);
        
    }
}
