<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    use Translatable;

    protected $fillable = ['image'];

    public $translatedAttributes = ['title', 'description', 'locale'];

    public function translation(): HasMany
    {
        return $this->hasMany(CategoryTranslation::class);
    }
}
