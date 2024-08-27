<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderEntry extends Model
{
    protected $fillable = ['order_id', 'dish_id', 'amount', 'price', 'name', 'notes'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'price' => 'float',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function dish()
    {
        return $this->belongsTo(Dish::class);
    }
}
