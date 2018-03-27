<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	
    protected $fillable = [
		'name'
	];

	/*
	* Many to Many relation 
	* between Tag and Company
	* the Companies belong to the Tag
	* belongsToMany(relation Model name, pivotTable name, current model id, id of relation model)
	*/
    public function companies(){
    	return $this->belongsToMany(Company::class,'company_tag','tag_id','company_id')->withTimestamps();;
    }

}
