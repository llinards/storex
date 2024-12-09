<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
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

        $sourceImagePath = resource_path('images/category-cover-image-sample.jpg'); // Path to the source image
        $destinationPath = storage_path('app/public/categories');

        $imageName            = basename($sourceImagePath);
        $destinationImagePath = $destinationPath.'/'.$imageName;

        if ( ! file_exists($destinationImagePath)) {
            copy($sourceImagePath, $destinationImagePath);
        }

        return [
            'image' => $imageName,
        ];
    }
}
