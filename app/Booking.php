<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';


    protected $fillable = ['guest_full_name',
    'guest_credit_card',
    'room',
    'from date',
    'to date',
    'more_details'
    ];
}
