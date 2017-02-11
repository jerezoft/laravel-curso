<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class TestController extends Controller
{



    
    public function view($id ="sin valor alguno"){
    	
    	$article = Article::find($id);
    
    		$article->Category;
    		$article->user;
    		$article->tags;
    		dd($article);
    	
    }



}
