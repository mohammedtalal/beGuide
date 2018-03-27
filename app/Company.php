<?php

namespace App;

use App\CompanyOwner;
use App\Tag;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;



class Company extends Model
{

    protected $fillable = [
        'id',
    	'name',
        'main_image',
        'description',
        'email',
        'category_id',
    ];

    /*
      *  Each Company belongs Category,
      * Each Category hasMany company
    */
    public function categories() {
    	return $this->belongsTo(Category::class,'category_id','id');
    }

    /*
      * Each company hasMany branches
      * Each branch belongsTo company
    */
    public function branches() {
        return $this->hasMany(Branch::class,'id');
    }

    /*
        Each Company belongTo Owner
        Each owner hasMany Company
    */
    public function owners() {
        return $this->belongsTo(CompanyOwner::class);
    }

    /*
    * Many to Many relation 
    * between Company and Tag
    * the Tags belong to the Company
    * belongsToMany(relation Model name, pivotTable name, current model id, id of relation model)
    */
    public function tags() {
        return $this->belongsToMany(Tag::class,'company_tag','company_id','tag_id');
    }

    /*
    * Many to Many relation 
    * between Company and Image
    * the Companies belong to the Image
    * belongsToMany(relation Model name, pivotTable name, current model id, id of relation model)
    */
    public function images(){
        return $this->belongsToMany(Image::class,'company_image', 'company_id', 'image_id');
    }

}