<?php

namespace App\Models;

use App\Traits\TracksAudit;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use TracksAudit;

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
