<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['image'];

    public function translation(): HasMany
    {
        return $this->hasMany(CategoryTranslation::class);
    }

    public function getTitleAttribute(): string|null
    {
        return $this->translation->first()->title ?? null;
    }

    public function getSlugAttribute(): string|null
    {
        return $this->translation->first()->slug ?? null;
    }

    public function getDescriptionAttribute(): string|null
    {
        return $this->translation->first()->description ?? null;
    }
}
