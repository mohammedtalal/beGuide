<?php

namespace App\Http\Controllers\site;

use App\Branch;
use App\Company;
use App\Http\Controllers\Controller;
use App\Mail\CompanyEmail;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProfileController extends Controller
{
    public function index(Branch $branch) {
        $anotherBranches = Branch::where('company_id', $branch->companies->id)->orderBy('created_at','asc')->get();

        return view('site/profile.profile',compact('branch','anotherBranches'));
    }

    public function map($id) {
    	$branch = Branch::find($id);
    	return view('site/map.map',compact('branch'));
    }



    public function sendEmailToCompany($id){
    	$company = Company::find($id);
    	$companyEmail = $company->email;
    	\Mail::to($companyEmail)->send(new CompanyEmail);
    	return redirect()->back();
    }

}
