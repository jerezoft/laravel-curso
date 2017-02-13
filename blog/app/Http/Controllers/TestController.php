<?php

namespace App\Http\Controllers;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Http\Request;
use App\Article;

class TestController extends Controller
{

use Sluggable;

    
//Clase documentacion de sluggable
  public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }



    public function view($id =1){
    	
    	$article = Article::find($id);


	      		return View('test.index',['prueba'=>$article]);
    	
    }



}
