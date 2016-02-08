<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // 

    public function skills()
    {
    	return $this->hasMany('App\Skill');
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
