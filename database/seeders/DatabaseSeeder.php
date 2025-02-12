<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use App\Models\ProductVariantAttachment;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name'  => 'Test User',
            'email' => 'test@test.com',
        ]);
        Category::factory()->count(1)->create([
            'title'        => [
                'en' => 'Accessories',
                'lv' => 'Aksesuāri',
            ],
            'is_accessory' => true,
            'area'         => null,
        ])->each(function ($category) {
            Product::factory()->count(4)->create([
                'category_id' => $category->id, 'is_featured' => false, 'price' => 4999,
            ])
                   ->each(function ($product) {
                       ProductImage::factory()->count(6)->create(['product_id' => $product->id]);
                   });
        });

        Category::factory()->count(1)->create()->each(function ($category) {
            Product::factory()->count(2)->create(['category_id' => $category->id])
                   ->each(function ($product) {
                       ProductVariant::factory()->count(2)->create(['product_id' => $product->id])
                                     ->each(function ($variant) {
                                         ProductVariantAttachment::factory()->count(1)->create(['product_variant_id' => $variant->id]);
                                     });

                       ProductImage::factory()->count(6)->create(['product_id' => $product->id]);
                   });
        });
    }
}
