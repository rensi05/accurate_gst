<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'full_name',
        'business_name',
        'email',
        'mobile',
        'service_required',
        'preferred_date',
        'preferred_time',
        'notes',
    ];

    protected $casts = [
        'preferred_date' => 'date',
    ];
}
