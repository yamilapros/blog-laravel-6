<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    //Relationship with pivot table
    public function posts(){
        return $this->belongsToMany('App\Post', 'post_tags');
    }
}
