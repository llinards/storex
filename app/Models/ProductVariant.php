<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class ProductVariant extends Model
{
    use HasFactory;
    use HasTranslations;

    public array $translatable = ['title'];

    public function getFallbackLocale(): ?string
    {
        return env('APP_LOCALE');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    protected static function boot(): void
    {
        parent::boot();

        static::addGlobalScope('price', static function (Builder $builder) {
            $builder->orderBy('price');
        });
    }
}
