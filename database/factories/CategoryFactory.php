<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider;

class CategoryFactory extends Factory
{
    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new FakerPicsumImagesProvider($faker));

        $title = $this->faker->sentence(2);
        $slug = Str::slug($title);

        // Use the default disk instead of hardcoded 'public'
        $disk = config('filesystems.default', 'local');

        if (! Storage::disk($disk)->exists('categories')) {
            Storage::disk($disk)->makeDirectory('categories');
        }

        return [
            'image' => app()->environment('testing')
                ? 'test-category-'.$this->faker->uuid().'.jpg'
                : basename($faker->image(
                    dir: storage_path('app/public/categories'),
                    width: 800,
                    height: 600
                )),
            'title' => [
                'en' => '(EN) '.$title,
                'lv' => '(LV) '.$title,
            ],
            'slug' => [
                'en' => 'en-'.$slug,
                'lv' => 'lv-'.$slug,
            ],
            'description' => [
                'en' => '<p>'.$this->faker->sentence(10).'</p>',
                'lv' => '<p>'.$this->faker->sentence(10).'</p>',
            ],
            'is_featured' => $this->faker->boolean(10),
            'area' => [
                'en' => $this->faker->numberBetween(0, 99),
                'lv' => $this->faker->numberBetween(0, 99),
            ],
            'is_available' => true,
        ];
    }
}
