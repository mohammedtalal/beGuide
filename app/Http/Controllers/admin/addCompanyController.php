<?php

namespace App\Http\Controllers\admin;

use App\AddCompany;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class addCompanyController extends Controller
{
    public function create() {
    	$addCompaniesData = AddCompany::pluck('value','key');
    	if (count($addCompaniesData) > 0) {
            return view('admin/addCompany.update',compact('addCompaniesData'));
        }
    	return view('admin/addCompany.create');
    }

    public function store(Request $request) {

    	foreach ($request->except('_token') as $key => $value ) {
        	AddCompany::updateOrCreate(array('key' => $key),array('value' => $value));
        }
    	return redirect()->route('admin.addCompany.create')->with('success','add-company data Successfully');;
    }
}