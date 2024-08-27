<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['name', 'delivers', 'plz', 'city', 'street', 'house_number'];

    protected $casts = [
        'delivers' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }
}
