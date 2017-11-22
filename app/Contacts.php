<?php

namespace Djerelo;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $fillable = [
        'phone',
        'email',
        'address_ua',
        'address_ru',
        'address_en'
        
        
    ];

    public $timestamps = false;

}
