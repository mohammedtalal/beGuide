<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class landingPageController extends Controller
{

    public function create() {
        $mainData = Setting::pluck('value','key');
        if (count($mainData) > 0) {
            return view('admin/landingPage.update',compact('mainData'));
        }
        return view('admin/landingPage.create');
    
    }

    public function store(Request $request) {
        foreach ($request->except('_token') as $key => $value ) {
            $this->validate($request, [
                $key  => 'required',
            ]);
            Setting::updateOrCreate(array('key' => $key),array('value' => $value));
        }
       
        return redirect()->route('landingPage.create')->with('success','Main Data created successfuly');
    }

}
