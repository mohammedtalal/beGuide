<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        $tags = Tag::paginate(10);
        return view('admin/tags.index',compact('tags'));
    }

    public function store(Request $request) {
        $tag  = new Tag;
        $tag->name = $request->name;
        $tag->save();
        return redirect()->route('tags.index')->with('success','Tag Created Successfully');
    }

    public function edit($id) {
        $tag = Tag::find($id);
        return view('admin/tags.edit',compact('tag'));
    }

    public function update($id){
        $tag = Tag::find($id);
        $tag->name = request()->name;
        $tag->save();
        return redirect()->route('tags.index')->with('success','Tag updated Successfully');
    }

    public function destroy($id){
        $tag = Tag::find($id);
        $tag->delete();
        return redirect()->route('tags.index')->with('danger','Tag deleted Successfully');
    }
}
