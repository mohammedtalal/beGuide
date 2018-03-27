<?php

namespace App;

use App\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Team extends Model
{
    protected $table="teams";
    protected $fillable = [
    	'image', 'name', 'position'
    ];

     // upload main image
    public function uploadImage() {
    	if (request()->hasFile('image')) {
    		  $image = request()->file('image');
	        $imageName = uniqid().$image->getClientOriginalName();
	        $imagesDirectory = public_path('images/teams');
	        $image->move(public_path('/images/teams/') ,$imageName);
	        return $imageName;
	    }
    }
}
