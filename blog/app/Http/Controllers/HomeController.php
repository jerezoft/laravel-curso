<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Http\FormRequest;
use App\http\Requests\MiFormulario;
use Validator;




class HomeController extends Controller
{


//isMethod ----- has
public function form(Request $request){
	if ($request->isMethod("post") && $request->has("nombre")) {
		 $name = $request->input("nombre");
	}else{
		$name = "";
	}
	return View("home.form",["name"=>$name]);
}



public function con(){
	$nombres = array('nombre1'=>'juan','nombre2'=>'carlos','nombre3'=>'andres','nombre4'=>'fabian');
	return View("home/vista",['nombres'=>$nombres]);
}


public function miformulario(){
	return View("home.miformulario");
}


public function validarmiformulario(MiFormulario $formulario){

	$Validator = Validator::make($formulario->all(),$formulario->rules(),$formulario->messages());

	if ($Validator->valid()) {
			return redirect('home/miformulario')->with("message","formulario enviado correctamente");


	}

}



}