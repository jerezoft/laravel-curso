<?php

namespace App\Http\Controllers;

use  App\http\Controller\Controllers;
use illuminate\http\Request;


class SumController extends Controller{



public function suma(Request $request){

	if($request->isMethod("get") and $request->has("numero1") and $request->has("numero2")){

		$numero1 = $request->input("numero1");

		$numero2 = $request->input("numero2");


	}else{

		$numero1 = 0;
		$numero2 = 0;
	}

		return View("home.suma",["numero1"=>$numero1,"numero2"=>$numero2]);

}



}





?>