<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomImages extends Model
{
    protected $fillable = [
        'image',
        'room_id'
        
    ];

    public $timestamps = false;

}
