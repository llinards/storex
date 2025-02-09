<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $title = $this->faker->sentence(2);
        $slug  = Str::slug($title);

        return [
            'title'            => [
                'en' => '(EN) '.$title,
                'lv' => '(LV) '.$title,
            ],
            'slug'             => [
                'en' => 'en-'.$slug,
                'lv' => 'lv-'.$slug,
            ],
            'description'      => [
                'en' => '<p>'.$this->faker->sentence(25).'</p>',
                'lv' => '<p>'.$this->faker->sentence(25).'</p>',
            ],
            'is_featured'      => $this->faker->boolean(40),
            'is_available'     => true,
            'available_length' => [
                'en' => $this->faker->randomFloat(2, 1, 1000),
                'lv' => $this->faker->randomFloat(2, 1, 1000),
            ],
            'available_width'  => [
                'en' => $this->faker->randomFloat(2, 1, 1000),
                'lv' => $this->faker->randomFloat(2, 1, 1000),
            ],
            'available_height' => [
                'en' => $this->faker->randomFloat(2, 1, 1000),
                'lv' => $this->faker->randomFloat(2, 1, 1000),
            ],
            'available_area'   => [
                'en' => $this->faker->randomFloat(2, 1, 1000),
                'lv' => $this->faker->randomFloat(2, 1, 1000),
            ],

        ];
    }
}
