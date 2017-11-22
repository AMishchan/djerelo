<?php

namespace Djerelo;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    protected $fillable = [
        'arrival',
        'departure',
        'adults',
        'rooms_quontaty',
        'kids',
        'name',
        'phone'
        
        
        
    ];

    public $timestamps = false;

}
