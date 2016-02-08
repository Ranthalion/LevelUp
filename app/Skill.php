<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;

class Skill extends Model
{
    //

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }

    public function created_by()
    {
    	return $this->belongsTo('App\User');
    }

    public function approved_by()
    {
    	return $this->belongsTo('App\User');
    }
}
