<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Company;
use App\Image;
use App\Tag;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use Intervention\Image\ImageManagerStatic as ImageResize ;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index() {
        $companies = Company::orderBy('id','asc')->paginate(10);

        return view('admin/companies.index',compact('companies'));
    }

    public function create() {
        $categories = Category::where('parent_id', '=',0)->get();
        $tags  = Tag::all();
        
        return view('admin/companies.create',compact('categories','clearlytags','tags'));
    }

    public function store() {
        $companyRequest = new CompanyRequest ;
        $this->validate(request(), [
            'name' => 'required',
            'category_id' => 'required',
            'main_image' => 'required|mimes:jpeg,bmp,png',  
        ]);
        $companyRequest->persistCreateCompany();
        return redirect()->route('companies.index')->with('success','Company Created Successfully');
    }


    public function edit( $id) {
        $company = Company::find($id);
        $categories = Category::where('parent_id', '=',0)->get();
        $urlPaths = [];
        $pointer=0;
        foreach ($company->images as $image) {
            $pivotIDS = $image->pivot;
            $getImageObject = Image::where('id','=', $pivotIDS->image_id)->get();
            $fetchURl = $getImageObject->all();
            array_push($urlPaths, $fetchURl[$pointer]);
        }

        $tags2 = Tag::pluck('name','id')->toArray();
        return view('admin/companies.edit',compact('company','categories','urlPaths','tags2'));
    }

    public function update($id) {
        $companyRequest = Company::find($id);

        $this->validate(request(), [
             'name' => 'required',
            'category_id' => 'required',
            'main_image' => 'required|mimes:jpeg,bmp,png',  
        ]);

        $oldImagePath = public_path('images/companies/'. $companyRequest->main_image);
        if(! is_null($oldImagePath)) { File::delete($oldImagePath); }
        
        $image = request()->file('main_image');
        $imageName = date('Y-m-d-h-i-s').$image->getClientOriginalName();
        $image_resize = ImageResize::make($image->getRealPath());
        $image_resize->resize(50, 50);
        $image_resize->save(public_path('images/companies/'.$imageName));

        $companyRequest->category_id = request('category_id');
        $companyRequest->name = str_ireplace(' ', '-',request('name'));
        $companyRequest->main_image  = $imageName;
        $companyRequest->description = request('description');
        $companyRequest->email   = request('email');
        
        
        $companyRequest->facebook   = request('facebook');
        $companyRequest->youtube  = request('youtube');
        $companyRequest->twitter   = request('twitter');
        $companyRequest->instgram   = request('instgram');
        $companyRequest->linkedin   = request('linkedin');
        $companyRequest->googleplus   = request('googleplus');
        $companyRequest->website   = request('website');

        $companyRequest->video  = request('video');
        $companyRequest->save();
        if (isset(request()->tags)) {
            $companyRequest->tags()->sync(request()->tags);            
        } else {
            $companyRequest->tags()->sync(array());            
        }  
        if (request()->hasFile('company_images')) {
             $arrayOfNewIDS = [];
            foreach (request()->File('company_images') as $image) {
                $oldImagePath = public_path('images/companies/gallery/'. $companyRequest->main_image);
                if(! is_null($oldImagePath)) { File::delete($oldImagePath); }

                // get image name and save it to /images/gallery path
                $imageName = date('Y-m-d-h-i-s').$image->getClientOriginalName();
                $image->move(public_path('/images/companies/gallery/') ,$imageName);
                
                // insert images into images table
                $imageCreatedObject =  Image::create(['url'  => $imageName]);;
                // find company from id
                $lastCompanyInserted = Company::find($id);
                array_push($arrayOfNewIDS, $imageCreatedObject->id);
                // attach company_ids and images_ids into pivot table
                $imageCreatedObject =  $lastCompanyInserted->images()->sync($arrayOfNewIDS);    
            } // end foreach
        } // end if 
        return redirect()->route('companies.index')->with('success','Company Updated successfully');
    }

    public function destroy($id) {
        $company = Company::find($id);

        // detach images and tags from pivot tables
        $company->images()->detach();
        $company->tags()->detach();

        // delete related items
        $oldImagePath = public_path('images/companies/'. $company->main_image);
        if(! is_null($oldImagePath)) {
            File::delete($oldImagePath);
        }
        // delete main category
        $company->delete();
        return redirect()->route('companies.index')->with('danger','Company Deleted successfully');
    }
}
