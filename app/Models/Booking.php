<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
   protected $fillable = [
    'name',
    'phone',
    'email',
    'pickup',
    'dropoff',
    'datetime',
    'people',
    'luggage',
    'instructions',
    'service_type',
    'vehicle_type',
];
}
