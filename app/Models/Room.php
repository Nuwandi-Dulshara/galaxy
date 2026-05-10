<?php

namespace App\Models;

use App\Traits\TracksAudit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use TracksAudit;

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

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
