<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultationRequest extends Model
{
    protected $fillable = [
        'full_name',
        'business_name',
        'email',
        'mobile',
        'service_required',
    ];
}
