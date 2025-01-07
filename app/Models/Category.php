<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;
    use HasTranslations;

    public array $translatable = ['title', 'slug', 'description'];

    public function getFallbackLocale(): string
    {
        return env('APP_LOCALE');
    }

    public function resolveRouteBinding($value, $field = null)
    {
        $locale = request()->route('locale');

        return $this->where("slug->{$locale}", $value)->firstOrFail();
    }
}
