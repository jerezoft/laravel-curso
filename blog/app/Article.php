<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    

    //fillable ->lleno


    public function Category(){
    	return $this->belongsTo('App\Category');
    }

    public function User(){
    	return $this->belongsTo('\App\User');
    }

    public function Images(){
    	return $this->belongsTo('\App\Image');
    }
    public function tags(){
    	return $this->belongsToMany('\App\Tag')->withTimestamps();
    }
}
 

