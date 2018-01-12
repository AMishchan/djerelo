<?php

namespace Djerelo;

use Illuminate\Database\Eloquent\Model;

class Feetback extends Model
{
  
    protected  $fillable = [
        'first_name',
        'feetback'

    ];

    public $timestamps = false;
}
