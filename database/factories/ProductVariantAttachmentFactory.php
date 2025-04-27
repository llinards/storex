<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class ProductVariantAttachmentFactory extends Factory
{
    public function definition(): array
    {
        if (! Storage::disk('public')->exists('attachments')) {
            Storage::disk('public')->makeDirectory('attachments');
        }

        return [
            'filename' => basename($this->faker->file(
                storage_path('factory'),
                storage_path('app/public/attachments'),
                false
            )),
        ];
    }
}
