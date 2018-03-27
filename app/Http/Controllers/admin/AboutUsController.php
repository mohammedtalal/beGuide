<?php

namespace App\Http\Controllers\admin;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function create () {
    	$aboutUsData = About::pluck('value','key');
        if (count($aboutUsData) > 0) {
            return view('admin/aboutUs.update',compact('aboutUsData'));
        }
        return view('admin/aboutUs.create');
    }

    public function store(Request $request) {
        
      	foreach ($request->except('_token') as $key => $value ) {
            
        	About::updateOrCreate(array('key' => $key),array('value' => $value));
        }
        return redirect()->route('admin.about.create')->with('success','About-Us Created Successfully');
    }

}
