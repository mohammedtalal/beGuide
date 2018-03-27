<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use  Illuminate\Database\Query\Builder;

class Branch extends Model
{
    
    protected $table = "branches";
    use Searchable;


    public function toSearchableArray()
    {
        $searchAttr = array_only($this->toArray(), ['name','address']);

        $searchAttr['category'] = $this->companies->categories->name;


        $tags = [ 'tasg' => $this->companies->tags->map(function ($tag) {
                        return $tag->name;
                    })->toArray()
    ]; 
       return array_merge($searchAttr,$searchAttr);
    }
    
    protected $fillable = [
        'address',
        'phone',
        'company_id',
        'lat',
        'lng',
        'name'
    ];


    /*
        Each Branche belongTo Company
        Each company hasMany Branches
    */
    public function companies() {
        return $this->belongsTo(Company::class,'company_id','id');
    }

    public function getRouteKeyName() {
        return 'name' ;
    }
}
