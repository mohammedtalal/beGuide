<?php

namespace App\Http\Controllers\site;

use App\AddCompany;
use App\CompanyOwner;
use App\Http\Controllers\Controller;
use App\Http\Requests\siteAddNewCompanyRequest;
use Illuminate\Http\Request;

class addCompanyController extends Controller
{
    public function index () {
    	$addCompanyData = AddCompany::pluck('value','key');
    	return view('site/addCompany.addCompany',compact('addCompanyData'));
    }

    public function ownerDetails(siteAddNewCompanyRequest $request) {
        CompanyOwner::create($request->all());
        return redirect()->route('landingPage.index');
    }
}
