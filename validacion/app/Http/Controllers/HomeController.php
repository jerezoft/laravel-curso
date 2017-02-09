<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\controller;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\MiFormulario;
use Validator;

class HomeController extends controller{



public Function miFormulario(){

	return View("home.miFormulario");
}

public function validarMiFormulario(MiFormulario $formulario){

	$validator = Validator::make($formulario->all(),$formulario->rules(),
									$formulario->messages());


	if($validator->valid()){

		return 'ok';

	}
}


}




 ?>