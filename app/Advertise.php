<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    protected $table = "advertises";
    protected $fillable = [
        'left_adv',
        'left_alt',
        'right_adv',
        'right_alt',
        'mainBG_alt',
        'mainBG_image',
        'subscribeBG_alt',
        'subscribeBG_image',

    ]; 
}
