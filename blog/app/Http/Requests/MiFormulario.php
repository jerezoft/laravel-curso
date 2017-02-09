<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;




class Miformulario  extends FormRequest{

	protected $redirect ='inicio/miformulario';

	public function rules(){
		return [
				'nombre'=> 'required|min:3|max:12|regex:/^[a-z]+$/i',
				'correo' => 'required|email'
		];
	}

	public function messages(){
		//si salta de el mensaje es requerido este posible error
		return ['nombre.required' => 'el campo nombre es requerido',
				'nombre.min' => 'El minimo requerido son 3 caracteres',
				'nomre.max'=>'El maxmino permitido son 12 caracteres',
				'nombre.control'=> 'Solo se aceptan letras',
				'correo.required'=>'correo requerido',
				'correo.email'=>'dijite un email valido'
		       ];

	}

  //Respuestas con el servidor y riderrionamos que le podamos enviar los mensajes con sus respectivo
	//y valores de los campos
	public function response(array $errors){
		//Esta propiedad la definimos al principo de la clase
		//a la ruta del formulario donde se encuentra		 //el siguiente alista esta en la vista
		return redirect($this->redirect)
		->withErrors($errors, 'formulario')
		->withInput();
	}

	//autorizar a todos los usuarios que puedan enviar el formulario a esta ruta
	//regresa un valor booleano
	public function authorize(){
		return true;
	}



}


 ?>