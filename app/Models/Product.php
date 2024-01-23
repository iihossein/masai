<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Product extends Model
{
    use HasFactory;
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
    public function images(): MorphToMany
    {
        return $this->belongsToMany(Image::class, 'product_photos', 'product_id', 'photo_id')
                ->withPivot('size');
    }
}
