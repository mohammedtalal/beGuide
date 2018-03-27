<?php

namespace App\Http\Requests;

use App\Category;
use Illuminate\Contracts\Filesystem\makeDirectory;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image ;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'            => 'required',
            'description'     => 'required',
            'category_image'  => 'required|image|mimes:jpeg,bmp,png',
            'parent_id'       => 'required'
        ];
    }


    // resize image and save it
    public function uploadImage() {
        $image = request()->file('category_image');
        $imageName = date('Y-m-d-h-i-s').$image->getClientOriginalName();
        $image_resize = Image::make($image->getRealPath());
        $image_resize->resize(300, 300);
        $categoryImagesDirectory = public_path('images/categories');
        
        if (! is_dir($categoryImagesDirectory) ) {
            File::makeDirectory(public_path(). '/images' .'/categories',0777, true);
        } 
        $image_resize->save(public_path('/images/categories/').$imageName);
        return $imageName;
    }

    // create category
    public function persistCreateCategory() {
        $category = new Category; 

        if (request('parent_id') != 0 ) {
            $category->parent_id = request('parent_id');
        }
        $category->name = request('name');
        $category->description = request('description');
        $category->category_image = $this->uploadImage();
        $category->save();
    }

    // update category
    public function updateCategory($id) {
        $category =  Category::find($id); 
        $oldImagePath = public_path('/images/categories/'. $category->category_image);
        if(! is_null($oldImagePath)) {
            File::delete($oldImagePath);
        }

        // store image and resize it
        $image = request()->file('category_image');
        $imageName = str_random(50).$image->getClientOriginalName();
        $image_resize = Image::make($image->getRealPath());
        $image_resize->resize(50, 50);
        $image_resize->save(public_path('/images/categories/').$imageName);
        
        if (request('parent_id') != 0 ) {
            $category->parent_id = request('parent_id');
        }
        $category->name = request('name');
        $category->description = request('description');
        $category->category_image = $imageName;
        $category->save();
    }

}
