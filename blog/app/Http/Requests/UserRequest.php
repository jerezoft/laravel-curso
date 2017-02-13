<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'min:4|max:104|required|',
            'email'=> 'email|unique:users'
        ];
    }


    public function messages(){
     return[  'name.required' => 'El campo nombre es requerido',
       'name.min' => 'El minimo requerido son 4 caracteres',
       'name.max' => 'El maximo requerido son 104 caracteres' ,

        'email.email' => 'El campo deber fener el formato de correo example  xxxx@xxxx.com',
        'email.unique' => 'El correo que se intentar registrar ya existe'
       ];


    }
}
