<?php

namespace Djerelo;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'id',
        'image',
        'status'
        

    ];

    public $timestamps = false;
}
