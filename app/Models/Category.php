<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Category extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('medium')
        ->crop(\Spatie\Image\Manipulations::CROP_CENTER, 400, 400)
            ->optimize();
    }
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function category_attributes(): HasMany
    {
        return $this->hasMany(CategoryAttribute::class);
    }
}
