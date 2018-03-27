<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::where('parent_id', '=', 0)->with('children')->paginate(10);
    	return view('admin/categories.index',compact('categories'));
    }

    public function getSubCategories() {
        $subCategories = Category::where('parent_id', '!=', 0)->paginate(10);

        return view('admin/categories.subCategories',compact('subCategories'));
    }

    public function create() {
        $categories = Category::where('parent_id', '=', 0)->get();
        return view('admin/categories.create',compact('categories'));
    }

    public function store(CategoryRequest $categoryRequest) {
        $this->validate(request(), [
            'name'            => 'required',
            'description'     => 'required',
            'category_image'  => 'required|image|mimes:jpeg,bmp,png',
            'parent_id'       => 'required'
        ]);
       $categoryRequest->persistCreateCategory();
       return redirect()->route('categories.index')->with('success','Category Created Successfully');
    }

    public function edit($id) {
        $category = Category::find($id);
        $categories = Category::where('parent_id', '=', 0)->get();
        return view('admin/categories.edit',compact('category','categories'));
    }

    public function update(CategoryRequest $catRequest, $id) {
        $this->validate(request(), [
            'name'            => 'required',
            'description'     => 'required',
            'category_image'  => 'required|image|mimes:jpeg,bmp,png',
            'parent_id'       => 'required'
        ]);
        $catRequest->updateCategory($id);
        return redirect()->route('categories.index')->with('success','Category Updated successfully');
    }

    public function destroy($id) {
        $category = Category::with('children')->find($id);
        
        // delete related items
        $category->children()->delete();

        $oldImagePath = public_path('images/categories/'. $category->category_image);
        if(! is_null($oldImagePath)) {
            File::delete($oldImagePath);
        }
        // delete main category
        $category->delete();
        return redirect()->route('categories.index')->with('danger','Deleted Category successfully');
    }
    
}
