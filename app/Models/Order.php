<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;
    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }
    public function order_items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
    public function delivery(): HasOne
    {
        return $this->hasOne(Delivery::class);
    }
}
