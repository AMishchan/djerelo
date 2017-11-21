<?php

namespace Джерело;

use Illuminate\Database\Eloquent\Model;

class Feetback extends Model
{
  protected $table='feetback';
    protected  $fillable = [
        'first_name',
        'feetback'
        
    ];

    public $timestamps = false;
}
