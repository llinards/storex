<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['image'];

    public function translations(): HasMany
    {
        return $this->hasMany(CategoryTranslation::class);
    }

    public function getTitleAttribute(): ?string
    {
        return $this->translations->first()->title ?? null;
    }

    public function getSlugAttribute(): ?string
    {
        return $this->translations->first()->slug ?? null;
    }

    public function getDescriptionAttribute(): ?string
    {
        return $this->translations->first()->description ?? null;
    }
}
