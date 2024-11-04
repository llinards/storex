<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\CategoryTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        if ( ! Storage::disk('public')->exists('storage/categories')) {
            Storage::disk('public')->makeDirectory('storage/categories');
        }

//        TODO: Needs to be fixed
        return [
            'image' => $this->faker->image(storage_path('app/public/storage/categories'), 360, 360, null, false,
                true, null, false, 'jpg'),
        ];
    }

//    TODO: Needs to be sorted out in the different way
    public function configure(): CategoryFactory|Factory
    {
        return $this->afterCreating(function (Category $category) {
            $locales         = ['lv', 'en'];
            $numTranslations = $this->faker->numberBetween(1, 2);

            for ($i = 0; $i < $numTranslations; $i++) {
                CategoryTranslation::factory()->create([
                    'category_id' => $category->id,
                    'locale'      => $locales[$i],
                    'title'       => $this->faker->sentence(3),
                    'description' => $this->faker->paragraph,
                ]);
            }
        });
    }
}
