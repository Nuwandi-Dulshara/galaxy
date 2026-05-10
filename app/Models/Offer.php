<?php

namespace App\Models;

use App\Traits\TracksAudit;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use TracksAudit;

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