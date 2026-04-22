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
        'smoking',
        'capacity',
        'breakfast',
        'image',
        'is_featured',
    ];

    protected $casts = [
        'smoking' => 'boolean',
        'breakfast' => 'boolean',
        'is_featured' => 'boolean',
        'price' => 'decimal:2',
    ];
}