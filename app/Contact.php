<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $table = "contacts";
     
    protected $fillable = [
		'address',
		'phone',
		'email',
		'logo',
		'companyName',
		'description',
		'lng',
		'lat'
	];
}
