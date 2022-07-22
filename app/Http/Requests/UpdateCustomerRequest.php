<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

            'name'=> 'required',
            'address'=> 'required',
            'phone_number'=> 'required',
            'category_id'=> 'required',

        ];

    }
    public function messages()
    {
        return [
            'name.required' => 'El campo Nombre es obligatorio',
            'address.required' => 'El campo Nombre es obligatorio',
            'phone_number.required' => 'El campo Nombre es obligatorio',
            'category.required' => 'El campo Nombre es obligatorio',

        ];
    }
}
