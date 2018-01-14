<?php

namespace Djerelo;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    protected $fillable = [
        'arrival',
        'departure',
        'order_date',
        'adults',
        'rooms_quantity',
        'kids',
        'name',
        'phone',
        'room_id',
        'room_number',
        'order_status'
        
        
        
    ];

    public $timestamps = false;

}
