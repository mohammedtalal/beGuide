<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class CompanyOwner extends Model
{
    protected $table ="company_owners";

    protected $fillable = [
        'name',
        'phone',
        'company_name',
        'email',
        'message'
    ];

    /*
      * Each owner hasMany company
      * Each company belongsTo owner
    */
    public function companies() {
        return $this->hasMany(Company::class,'id');
    }

}
