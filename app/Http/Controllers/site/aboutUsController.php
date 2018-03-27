<?php

namespace App\Http\Controllers\site;

use App\About;
use App\Http\Controllers\Controller;
use App\Team;
use Illuminate\Http\Request;

class aboutUsController extends Controller
{
    public function index () {
        $aboutUsData = About::pluck('value','key');
        $teams = Team::all();
    	return view('site/aboutUs.aboutUs',compact('aboutUsData','teams'));
    }
}
