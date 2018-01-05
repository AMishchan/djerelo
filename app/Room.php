<?php

namespace Djerelo;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_number',
        'short_description_ru',
        'short_description_ua',
        'short_description_en',
        'full_description_ru',
        'full_description_ua',
        'full_description_en',
        'main_img',
        'category_id',
        'status'
    ];

    public $timestamps = false;
    public function Categories()
    {
        return $this->hasOne('Room\Categories');
    }

}
