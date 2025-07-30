<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider;

class ProductImageFactory extends Factory
{
    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new FakerPicsumImagesProvider($faker));

        // Use the default disk instead of hardcoded 'public'
        $disk = config('filesystems.default', 'local');

        if (! Storage::disk($disk)->exists('products')) {
            Storage::disk($disk)->makeDirectory('products');
        }

        // For testing with Storage::fake(), we don't need actual images
        if (app()->environment('testing')) {
            return [
                'filename' => 'test-image-'.$this->faker->uuid().'.jpg',
            ];
        }

        return [
            'filename' => basename($faker->image(
                dir: storage_path('app/public/products'),
                width: 800,
                height: 600
            )),
        ];
    }
}
