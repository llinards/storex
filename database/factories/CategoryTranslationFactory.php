<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryTranslation>
 */
class CategoryTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $locales = config('app.available_locales');
        $title = $this->faker->sentence(3);
        $slug = Str::slug($title);

        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'slug' => $slug,
        ];
    }
}
