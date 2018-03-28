<?php

namespace App\Http\Controllers\admin;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\File\getClientOriginalName;

class ContactController extends Controller
{
    public function index(){
        $allContactData = Contact::paginate(10);
        $dataID = Contact::first();
        return view('admin/contact.index',compact('allContactData','dataID'));
    }

    public function create () {        
        return view('admin/contact.create');
    }

    public function store() {
        $this->validate(request(), [
            'companyName' => 'required',
            'address' => 'required',
            'description' => 'required',  
            'phone'    =>'required|regex:/(01)[0-9]{9}/',
            'email'    =>'required|email',
            'lat'    =>'required',
            'long'    =>'required',
            'logo'    =>'required|mimes:jpeg,bmp,png'
        ]);
        $contact = new Contact;

        $contact->companyName = request('companyName');
        $contact->address = request('address') ;
        $contact->description = request('description');
        $contact->phone = request('phone');
        $contact->email = request('email');
        $contact->lat = request('lat');
        $contact->lng = request('long');
        

        $image = request('logo');
        $imageName = date('Y-m-d-h-i-s').$image->getClientOriginalName();
        $image->move(public_path('/images/logo/') ,$imageName);
        $contact->logo = $imageName;
        
        $contact->save();

        // Contact::create(request()->all());
        return redirect()->route('admin.contact.index')->with('success','Contact-Us Created Successfully');
    }

    public function edit($id) {
        $contact = Contact::find($id);
        return view('admin/contact.edit',compact('contact'));
    }

    public function update( $id){

        $contact = Contact::find($id);
        // $this->validate(request(), [
        //     'companyName' => 'required',
        //     'address' => 'required',
        //     'description' => 'required',  
        //     'phone'    =>'required|regex:/(01)[0-9]{9}/',
        //     'email'    =>'required|email',
        //     'lat'    =>'required',
        //     'long'    =>'required',
        //     'logo'    =>'required|mimes:jpeg,bmp,png'
        // ]);
        // dd('asdasd');

        $contact->companyName = request('companyName');
        $contact->address = request('address') ;
        $contact->description = request('description');
        $contact->phone = request('phone');
        $contact->email = request('email');
        $contact->lat = request('lat');
        $contact->lng = request('long');
        

        $image = request('logo');
        // dd($image);
        $imageName = uniqid().$image->getClientOriginalName();
        $image->move(public_path('/images/logo/') ,$imageName);
        $contact->logo = $imageName;
        $contact->save();
        return redirect()->route('admin.contact.index')->with('success','Contact-us updated Successfully');
    }

    public function destroy($id){
        $data = Contact::find($id);
        $data->delete();
        return redirect()->route('contact.index')->with('danger','Deleted Data successfully');
    }
}
