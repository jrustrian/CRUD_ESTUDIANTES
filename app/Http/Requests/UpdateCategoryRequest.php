<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'description'=> 'required|unique:category,description',

        ];

    }
    public function messages()
    {
        return [

            'description.required'=>'La descripcion no debe estar vacio.',

            'description.unique'=>'la Descripcion ya Existe.',

        ];
    }
}
