<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'category',
        'image',
        'is_available',
        'unavailable_from',
        'unavailable_to',
    ];

    protected $casts = [
        'is_available' => 'boolean',
        'unavailable_from' => 'date',
        'unavailable_to' => 'date',
        'price' => 'decimal:2',
    ];
}
