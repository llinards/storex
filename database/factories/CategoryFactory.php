<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider;

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
        $faker = \Faker\Factory::create();
        $faker->addProvider(new FakerPicsumImagesProvider($faker));

        $title = $this->faker->sentence(2);
        $slug  = Str::slug($title);

        if ( ! Storage::disk('public')->exists('categories')) {
            Storage::disk('public')->makeDirectory('categories');
        }

        return [
            'image'       => basename($faker->image(dir: storage_path('app/public/categories'), width: 800,
                height: 600)),
            'title'       => [
                'en' => '(EN) '.$title,
                'lv' => '(LV) '.$title,
            ],
            'slug'        => [
                'en' => 'en-'.$slug,
                'lv' => 'lv-'.$slug,
            ],
            'description' => [
                'en' => '<p>'.$this->faker->paragraph.'</p>',
                'lv' => '<p>'.$this->faker->paragraph.'</p>',
            ],
        ];
    }
}
