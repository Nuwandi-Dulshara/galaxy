<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'title',
        'description',
        'original_price',
        'offer_percentage',
        'offer_price',
        'is_available',
        'start_date',
        'end_date',
        'image',
    ];
}