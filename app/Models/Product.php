<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
    public function discount(): HasOne
    {
        return $this->hasOne(Brand::class);
    }
    public function product_colors(): HasMany
    {
        return $this->hasMany(ProductColor::class);
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
    public function cart_items(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }
    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function category_attribute_values(): HasMany
    {
        return $this->hasMany(CategoryAttributeValue::class);
    }

}
