<?php

namespace App\Http\Requests;

use App\Branch;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as ImageResize ;

class BranchRequest extends FormRequest
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
            'company_id'    => 'required',
            'address'       => 'required',
            'phone'         => 'required|regex:/(01)[0-9]{9}/',
            'lat'           => 'required',
            'lng'          => 'required',
            'name'          =>  'required'
        ];
    }

    public function persistCreateBranch() {
        $branch = new Branch;
        $branch->address = request('address');
        $branch->name = str_ireplace(' ', '-',request('name'));

        $branch->lat = request('lat');
        $branch->lng = request('long');
        $branch->phone = implode(',' , request('phone'));
        $branch->company_id = request('company_id');
        $branch->save();
    }
}
