<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class ProductVariantAttachmentFactory extends Factory
{
    public function definition(): array
    {
        // Use the default disk instead of hardcoded 'public'
        $disk = config('filesystems.default', 'local');

        if (! Storage::disk($disk)->exists('attachments')) {
            Storage::disk($disk)->makeDirectory('attachments');
        }

        return [
            'filename' => app()->environment('testing')
                ? 'test-attachment-'.$this->faker->uuid().'.pdf'
                : basename($this->faker->file(
                    storage_path('factory'),
                    storage_path('app/public/attachments'),
                    false
                )),
        ];
    }
}
