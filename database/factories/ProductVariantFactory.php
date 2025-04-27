<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductVariantFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => [
                'en' => '(EN) '.$this->faker->word,
                'lv' => '(LV) '.$this->faker->word,
            ],
            'price' => $this->faker->randomFloat(0, 5000, 10000),
            'length' => $this->faker->randomFloat(2, 1, 1000),
            'width' => $this->faker->randomFloat(2, 1, 1000),
            'height' => $this->faker->randomFloat(2, 1, 1000),
            'space_between_arches' => $this->faker->randomFloat(2, 1, 1000),
            'gate_size' => $this->faker->randomNumber(2).'x'.$this->faker->randomNumber(2),
            'area' => $this->faker->randomFloat(2, 1, 1000),
            'pvc_tent' => $this->faker->randomFloat(2, 1, 1000),
            //            'frame_tube'           => $this->faker->word,
        ];
    }
}
