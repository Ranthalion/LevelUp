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

    /**
     * Scope a query to only include skills in a given category.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeInCategory($query, $category)
    {
        if ($category == null)
            return $query;
        else
            return $query->where('category_id', $category->id);
    }

    /**
     * Scope a query to only include skills with a give search term.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeMatchingTerm($query, $term)
    {
        if ($term == '')
            return $query;
        else
            return $query->where('name', 'like', '%' . $term . '%')
                ->orWhere('description', 'like', '%' . $term . '%');
    }

    

}
