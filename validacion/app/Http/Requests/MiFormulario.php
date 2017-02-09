<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MiFormulario extends FormRequest
{

    protected $redirect = "home/miformulario";
    /**
     * protected 
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
            'nombre'=> 'required|min:3|max:12|regex:/^[a-z]+$/i'

        ];
    }


    public function messages(){
        return[
        'nombre.required' => 'El campo nombres es requerido',
        'nombre.min' => 'el minimo permitido son 3 caracteres',
        'nombre.max' => 'el maximo permitido son 12 caracteres',
        'nombre.regex'=> 'solo se aceptan lestras'
        ];
    }


   public function response(array $errors){
    return redirect($this->redirect)->withErrors($errors,'formulario')
                                    ->withInput();
   } 
}
