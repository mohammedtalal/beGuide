<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{

	public function store() {
    	$subscribeEmail = new Subscribe;
        
    	$subscribeEmail->email = request('email');
    	$subscribeEmail->save();
    	return redirect()->route('landingPage.index');
    }

    public function index() {
    	$allSubscribes = Subscribe::paginate(10);
    	return view('admin/subscribes.index',compact('allSubscribes'));
    }

    public function edit($id) {
    	$subscribe = Subscribe::find($id);
    	return view('admin/subscribes.edit',compact('subscribe'));
    }

    public function update($id) {
    	$blog = Blog::find($id);
    	$blog->body = request('body');
    	$blog->save();
    	return redirect()->route('blog.index')->with('success','Blog Updated successfully');
    }

     public function destroy($id) {
    	$blog = Blog::find($id);
    	$blog->delete();
    	return redirect()->route('blog.index')->with('danger','Blog deleted successfully');
    }
}
