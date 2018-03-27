<?php

namespace App\Http\Requests;

use App\Company;
use App\Image;
use App\Tag;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;
use Intervention\Image\ImageManagerStatic as ImageResize ;
use Symfony\Component\HttpFoundation\File\getClientOriginalName;


class CompanyRequest extends FormRequest
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
            'name' => 'required',
            'category_id' => 'required',
            'main_image' => 'required|max:400000|image/*',  
            'company_images'    =>'max:400000|image/*'
        ];
    }



    // upload main image
    public function uploadImage() {
        $image = request()->file('main_image');

        $imageName = date('Y-m-d-h-i-s').$image->getClientOriginalName();
        $image_resize = ImageResize::make($image->getRealPath())->resize(200, 200);
        $companyImagesDirectory = public_path('images/companies');

        if (! is_dir($companyImagesDirectory) ) {
            File::makeDirectory(public_path(). '/images' .'/companies',0777, true);
        } 
        $image_resize->save(public_path('/images/companies/'.$imageName));

        return $imageName;
    }

    /*
    * persistCreateCompany Function logic
    * first: create company
    * second: go to images table to insert images to it
    * third: now i have last company inserted object, and images id
    * fouth: used company_object and image_id to attach both into pivot table
    */
    public function persistCreateCompany() {   
        $company = new Company;

        $company->category_id = request('category_id');
        $company->name = str_ireplace(' ', '-',request('name'));
        $company->description = request('description');
       
        $company->main_image = $this->uploadImage();
        
        $company->email      = request('email');
        $company->facebook   = request('facebook');
        $company->youtube    = request('youtube');
        $company->twitter    = request('twitter');
        $company->instgram   = request('instgram');
        $company->linkedin   = request('linkedin');
        $company->googleplus = request('googleplus');
        $company->website    = request('website');
    
        $company->video     = request('video');

        $company->save();

        $company->tags()->sync(request()->tags);

        if (request()->hasFile('company_images')) {
            foreach (request()->File('company_images') as $image) {
                // get image name and save it to /images/gallery path
                $imageName = date('Y-m-d-h-i-s').$image->getClientOriginalName();
                $image->move(public_path('/images/companies/gallery/') ,$imageName);
                
                // insert images into images table
                $imageCreatedObject = Image::create(['url'  =>  $imageName]);
                // get last company inserted
                $lastCompanyInserted = Company::orderBy('created_at','desc')->first();
                // attach company_ids and images_ids into pivot table
                $imageCreatedObject =  $lastCompanyInserted->images()->attach($imageCreatedObject->id);
            } // end foreach
        } // end if
    }

}