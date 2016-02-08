<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    public function skills()
    {
    	return $this->belongsToMany('App/Skll')
    }

}
