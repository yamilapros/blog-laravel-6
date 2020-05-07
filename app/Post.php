<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $table = 'posts';

    //Relationship with pivot table
    public function tags(){
        return $this->belongsToMany('App\Tag', 'tag_post')->withTimestamps();
    }

    public function categories(){
        return $this->belongsToMany('App\Category', 'category_post')->withTimestamps();
    }


}
