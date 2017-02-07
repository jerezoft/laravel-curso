<?php

namespace App\Http\Controllers;

use  App\http\Controller\Controllers;

class HomeController extends Controller
{

	public function index(){
		return "Hola mundo desde laravel";
	}


	public function vista(){
		$jerez = "Que pasa hijueputa";
		return view('vista',['jerez'=>$jerez]);
	}


	public function vista2(){
		$array =  array("uno"=>"juan","dos"=>"mariana");
		return view('vista',['array'=>$array]);
	}


    
}


