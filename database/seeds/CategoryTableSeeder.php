<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Smart Tivi',
            'slug' => 'smarttivi'
        ]);
        Category::create([
            'name' => 'Tivi OLED',
            'slug' => 'tivioled'
        ]);
        Category::create([
            'name' => 'Google Tivi',
            'slug' => 'googletivi'
        ]);
        Category::create([
            'name' => 'Tivi Android',
            'slug' => 'tiviandroid'
        ]);
        Category::create([
            'name' => 'Tivi NanoCell',
            'slug' => 'tivinanocell'
        ]);
        Category::create([
            'name' => 'Tivi Mini LED',
            'slug' => 'tiviminiled'
        ]);

    }
}
