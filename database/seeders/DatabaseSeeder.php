<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name'  => 'Test User',
            'email' => 'test@test.com',
        ]);
        Category::factory()->count(4)->create()->each(function ($category) {
            Product::factory()->count(4)->create([
                'category_id' => $category->id,
            ]);
        });
    }
}
