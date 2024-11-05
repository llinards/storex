<?php

namespace Database\Factories;

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
    if ( ! Storage::disk('public')->exists('categories')) {
      Storage::disk('public')->makeDirectory('categories');
    }

    return [
        'image' => $this->faker->image(storage_path('app/public/categories'), 1080, 720, null, false),
    ];
  }
}
