<?php

namespace App\Http\Controllers;

use  App\http\Controller\Controllers;
use illuminate\http\Request;


class SumController extends Controller{


public function create()
{
	return view("books.add");
}



}





?>