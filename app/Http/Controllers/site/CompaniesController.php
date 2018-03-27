<?php

namespace App\Http\Controllers\site;

use App\Blog;
use App\Branch;
use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompaniesController extends Controller
{
    public function index(){
    	$companies = Company::paginate(10);
		$blogs = Blog::orderBy( DB::raw('RAND()'))->take(3)->get();
	 	return view('site/companies.index',compact('companies','blogs')); 
    }

    public function show($id){
    	$company =  Company::find($id);
		$branches = Branch::where('company_id',$company->id)->get();
		$blogs = Blog::orderBy( DB::raw('RAND()'))->take(3)->get();
	 	return view('site/companies.company',compact('company','branches','blogs'));
    }
}
