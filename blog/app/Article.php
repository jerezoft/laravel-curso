<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;



class Article extends Model 
{
    use Sluggable;
  
    //fillable ->lleno

  

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


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
 

