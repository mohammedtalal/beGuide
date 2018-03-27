<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table="blogs";

    protected $fillable = [ 
    	'title',
    	'body' 
    ];

    public function getRouteKeyName() {
        return 'title';
    }
}
