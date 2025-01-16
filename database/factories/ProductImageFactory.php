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

        if ( ! Storage::disk('public')->exists('products')) {
            Storage::disk('public')->makeDirectory('products');
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
