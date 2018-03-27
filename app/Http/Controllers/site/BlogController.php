<?php

namespace App\Http\Controllers\site;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
    	$blogs = Blog::paginate(10);
		return view('site/blogs.blogs',compact('blogs'));
    }

    public function showBlog(Blog $title) {
    	$titleBlog = $title;
    	return view('site/blogs.blog', compact('titleBlog'));
    }
} 