<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'companyName'   =>  'required',
            'description'   =>  'required',
            'address'   =>  'required|regex:/(01)[0-9]{9}/',
            'phone'   =>  'required',
            'email'   =>  'required',
            'lng'   =>  'required',
            'lat'   =>  'required',
        ];
    }
}
