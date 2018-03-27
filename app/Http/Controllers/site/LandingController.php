<?php

namespace App\Http\Controllers\site;

use App\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index(){
    	$branches = Branch::orderBy( DB::raw('RAND()'))->take(4)->get();
    	$newClients = Branch::orderBy( DB::raw('RAND()'))->take(4)->get();
    	return view('site/landingPage.landingPage',compact('branches','newClients'));
    }

}
