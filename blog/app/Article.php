<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    
    protected $table = "articles";
    //fillable ->lleno
    protected $fillable = ["title","content","category_id","user_id"];

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
 

