<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddCompany extends Model
{
    protected $table = "addcompanies";
    protected $fillable = [
        'key',
        'value'
    ]; 
}
