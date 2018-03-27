<?php

namespace App\Http\Controllers\admin;

use App\CompanyOwner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CompanyOwnerController extends Controller
{
    public function getPendingCompanies() {
        $pendingCompanies = CompanyOwner::where('status', 0)->paginate(10);
        $numOfCompaniesPending = count($pendingCompanies);
        return view('admin/companyOwner.pendingCompanies',compact('pendingCompanies'));
    }

    public function getApprovedCompanies() {
        $approvedCompanies = CompanyOwner::where('status', 1)->paginate(10);
        return view('admin/companyOwner.approvedCompanies',compact('approvedCompanies'));
    }


    public function companiesApproved() {
    	$company = CompanyOwner::find(request('company_id'));
    	$approve = request('status') ? true : false;
    	$company->status = $approve;
    	$company->save();
    	return redirect()->route('admin.approvedCompanies')->with('success','approve company successfully');
    }

    public function changeCompanyToPending() {
    	$company = CompanyOwner::find(request('company_id'));
    	$pending = request('status') ? false : true;
    	$company->status = $pending;
    	$company->save();
    	return redirect()->route('admin.pendingCompanies')->with('success','return company as a pending company');
    }

    
}
