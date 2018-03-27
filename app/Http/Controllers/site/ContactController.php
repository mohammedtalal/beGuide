<?php

namespace App\Http\Controllers\site;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Mail\CustomersEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
    	$allData = Contact::all();
    	return view('site/contactUs.contactUs',compact('allData'));
    }

    public function sendEmail(){

    	$myContact = Contact::first()->toArray();

    	\Mail::to($myContact['email'])->send(new CustomersEmail);
    	return redirect()->route('contact.index');
    }
}
