<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;

    public array $translatable = ['title', 'slug', 'description'];

    public function getFallbackLocale(): ?string
    {
        return env('APP_LOCALE');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function resolveRouteBinding($value, $field = null)
    {
        $locale        = request()->route('locale');
        $defaultLocale = config('app.fallback_locale');

        $model = $this->where("slug->{$locale}", $value)->first();

        if ( ! $model) {
            $model = $this->where("slug->{$defaultLocale}", $value)->first();
        }

        return $model ?? abort(404);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    protected static function boot(): void
    {
        parent::boot();

        static::addGlobalScope('created_at', static function (Builder $builder) {
            $builder->orderBy('created_at');
        });
    }
}
