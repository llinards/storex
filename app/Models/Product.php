<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;

    public array $translatable = [
        'title', 'slug', 'description', 'additional_info', 'available_area', 'available_width',
        'available_height', 'available_length',
    ];

    public function getFallbackLocale(): ?string
    {
        return config('app.fallback_locale');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function resolveRouteBinding($value, $field = null)
    {
        $locale           = request()->route('locale') ?? app()->getLocale();
        $defaultLocale    = config('app.fallback_locale');
        $supportedLocales = array_keys(LaravelLocalization::getSupportedLocales());

        $model = $this->where("slug->{$locale}", $value)->first();

        if ($model) {
            return $model;
        }

        foreach ($supportedLocales as $availableLocale) {
            if ($availableLocale !== $locale) {
                $model = $this->where("slug->{$availableLocale}", $value)->first();

                if ($model) {
                    $localizedSlug = $model->getTranslation('slug', $locale, false);

                    if ($localizedSlug && $localizedSlug !== $value) {
                        session()->flash('redirect_to_localized_url', [
                            'locale'        => $locale,
                            'category_slug' => $model->category->getTranslation('slug', $locale, false)
                                               ?? $model->category->getTranslation('slug', $defaultLocale),
                            'product_slug'  => $localizedSlug,
                        ]);
                    }

                    return $model;
                }
            }
        }
        abort(404);
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
