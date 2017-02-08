<?php

namespace App\Http\Controllers;

use  App\http\Controller\Controllers;
use illuminate\http\Request;

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
    
}


