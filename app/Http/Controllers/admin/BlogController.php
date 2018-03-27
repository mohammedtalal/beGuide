<?php

namespace App\Http\Controllers\admin;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{

	public function index() {
    	$allBlogs = Blog::paginate(10);
    	return view('admin/blogs.index',compact('allBlogs'));
    }

    public function create() {
        return view('admin/blogs.create');
    }

	public function store() {
    	$blog = new Blog;
        $this->validate(request(), [
            'title'  => 'required|min:2',
            'body'  => 'required',
            'blog_image' => 'required|mimes:jpeg,bmp,png',
        ]);
        $blog->title = str_ireplace(' ', '-',request('title'));
    	$blog->body = request('body');

        $image = request('blog_image');
        $imageName = date('Y-m-d-h-i-s').$image->getClientOriginalName();
        $image->move(public_path('/images/blogs/') ,$imageName);
        $blog->blog_image = $imageName;

    	$blog->save();
    	return redirect()->route('blog.index')->with('success','Blog Created Successfully');
    }

    public function edit($id) {
    	$blog = Blog::find($id);
    	return view('admin/blogs.edit',compact('blog'));
    }

    public function update($id) {
    	$blog = Blog::find($id);
        $this->validate(request(), [
            'title'  => 'required|min:2',
            'body'  => 'required',
            'blog_image' => 'required|mimes:jpeg,bmp,png',
        ]);
    	$blog->title = str_ireplace(' ', '-',request('title'));
        $blog->body = request('body');

        $image = request('blog_image');
        $imageName = date('Y-m-d-h-i-s').$image->getClientOriginalName();
        $image->move(public_path('/images/blogs/') ,$imageName);
        $blog->blog_image = $imageName;

        $blog->save();
    	return redirect()->route('blog.index')->with('success','Blog updated successfully');
    }

     public function destroy($id) {
    	$blog = Blog::find($id);
    	$blog->delete();
    	return redirect()->route('blog.index')->with('danger','Blgo deleted successfully');
    }
}
