<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryValidation extends FormRequest
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
            'image'=>'required',
            'category_name'=>'required',
            // 'slug'=>'required',
            'description'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'image.required'=>'Please Select Image',
            'category_name.required'=>'Please Enter Category Name',
            // 'slug.required'=>'Please Enter Slug',
            'description.required'=>'Please Enter Description',
        ];
    }



}
