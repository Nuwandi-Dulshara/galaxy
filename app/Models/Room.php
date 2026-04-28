<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'room_size',
        'view',
        'bed_type',
        'capacity',
        'image',
        'images',
        'smoking',
        'breakfast',
        'is_featured',
        'is_available',
        'unavailable_from',
        'unavailable_to',
    ];

    protected $casts = [
        'images' => 'array',
        'smoking' => 'boolean',
        'breakfast' => 'boolean',
        'is_featured' => 'boolean',
        'is_available' => 'boolean',
        'unavailable_from' => 'date',
        'unavailable_to' => 'date',
        'price' => 'decimal:2',
    ];
}
