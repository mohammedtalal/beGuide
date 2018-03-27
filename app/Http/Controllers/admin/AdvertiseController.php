<?php

namespace App\Http\Controllers\admin;

use App\Advertise;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\File\getClientOriginalName;

class AdvertiseController extends Controller
{
    public function index() {
    	$advertises = Advertise::all();
        $adv_id = $advertises->first();
    	return view('admin/advertises.index',compact('advertises','adv_id'));
    }

    public function create() {

    	return view('admin/advertises.create');
    }

    public function store() {
    	$this->validate(request(), [
    		'left_adv' 	=> 'required|mimes:jpeg,bmp,png',
    		'left_alt' 	=> 'required|min:3',
    		'right_adv' => 'required|mimes:jpeg,bmp,png',
    		'right_alt'	=> 'required|min:3'
    	]);

    	$advertise = new Advertise;
    	$advertise->left_adv = $this->uploadImage(request('left_adv'));
    	$advertise->left_alt = request('left_alt');

    	$advertise->right_adv =  $this->uploadImage(request('right_adv'));
    	$advertise->right_alt = request('right_alt');

        $advertise->mainBG_image =  $this->uploadImage(request('mainBG_image'));
        $advertise->mainBG_alt = request('mainBG_alt');

        $advertise->subscribeBG_image =  $this->uploadImage(request('subscribeBG_image'));
        $advertise->subscribeBG_alt = request('subscribeBG_alt');
    	$advertise->save();
  
    	return redirect()->route('advertise.index')->with('success','Advertise Created Successfully');
    }


    public function edit($id) {
    	$advertise = Advertise::find($id);
    	return view('admin/advertises.edit',compact('advertise'));
    }

    public function update($id) {
        $advertise = Advertise::find($id);

        $this->validate(request(), [
            'left_adv'  => 'required|mimes:jpeg,bmp,png',
            'left_alt'  => 'required|min:3',
            'right_adv' => 'required|mimes:jpeg,bmp,png',
            'right_alt' => 'required|min:3'
        ]);

        $oldImageleftPath = public_path('/images/advertises/'. $advertise->left_adv);
        $oldImageRightPath = public_path('/images/advertises/'. $advertise->right_adv);

        if(! is_null($oldImageleftPath && $oldImageRightPath )) {
            File::delete($oldImageleftPath);
            File::delete($oldImageRightPath);
        }
        
        $advertise->left_adv = $this->uploadImage(request('left_adv'));
        $advertise->left_alt = request('left_alt');

        $advertise->right_adv =  $this->uploadImage(request('right_adv'));
        $advertise->right_alt = request('right_alt');

        $advertise->mainBG_image =  $this->uploadImage(request('mainBG_image'));
        $advertise->mainBG_alt = request('mainBG_alt');

        $advertise->subscribeBG_image =  $this->uploadImage(request('subscribeBG_image'));
        $advertise->subscribeBG_alt = request('subscribeBG_alt');
        $advertise->save();
    	return redirect()->route('advertise.index');
    }

    public function destroy($id) {
        $advertise = Advertise::find($id);
        $advertise->delete();
    	return redirect()->route('advertise.index')->with('danger','Advertise deleted Successfully');
    }

    public function uploadImage($imageRequest){
    	$getimageName = time().$imageRequest->getClientOriginalName();
    	$imageRequest->move(public_path('images/advertises/') , $getimageName);
    	return $getimageName;
    }
}
