<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class TestController extends Controller
{



    
    public function view($id =1){
    	
    	$article = Article::find($id);


	      		return View('test.index',['prueba'=>$article]);
    	
    }



}
