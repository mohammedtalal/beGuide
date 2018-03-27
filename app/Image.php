<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
		'url'
	];

	/*
	* Many to Many relation 
	* between Image and Company
	* the Images belong to the Companies
	* belongsToMany(relation Model name, pivotTable name, current model id, id of relation model)
	*/
    public function companies(){
    	return $this->belongsToMany(Company::class,'company_image','image_id','company_id');
    }
}
