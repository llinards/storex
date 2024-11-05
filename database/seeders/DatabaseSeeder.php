<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name'  => 'Test User',
            'email' => 'test@test.com',
        ]);

        $categories = Category::factory()->count(4)->create();
        foreach ($categories as $category) {
            foreach (config('app.available_locales') as $locale) {
                CategoryTranslation::factory()->create([
                    'category_id' => $category->id,
                    'locale'      => $locale,
                ]);
            }
        }
    }
}
