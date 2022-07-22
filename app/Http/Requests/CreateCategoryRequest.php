<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Session;

class CreateCategoryRequest extends FormRequest
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
            'description.required' => 'El campo Descripcion es obligatorio',

        ];
    }

}
