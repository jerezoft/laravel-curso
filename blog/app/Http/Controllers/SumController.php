<?php

namespace App\Http\Controllers;

use  App\http\Controller\Controllers;
use illuminate\http\Request;

 class SumController extends Controller{



public function suma(Request $request){

		if($request->isMethod("post") && $request->has("numero1") && $request->has("numero2")){

			$numero1 = $request->input('numero1');
			$numero2 = $request->input('numero2');
			$numero3 = $request->input('numero3');

		}else{

			$numero1 ="";
			$numero2 ="";

		}
		


			return View('home.suma',["numero1"=>$numero1,"numero2"=>$numero2,"numero3"=>$numero3]);
}



 }






?>