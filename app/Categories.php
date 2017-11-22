<?php

namespace Djerelo;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'name_ua',
        'name_ru',
        'name_en',
        'img'
        
        
        
    ];

    public $timestamps = false;

}
