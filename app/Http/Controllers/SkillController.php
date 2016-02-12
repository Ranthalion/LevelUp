<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Skill;
use App\Category;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category = 'All')
    {
        if ($category == 'All'){
            $skills = Skill::orderBy('name', 'asc')->get();
        }
        else{
            $cat = Category::where('name', $category)->first();
            if ($cat != null){
               $skills = Skill::where('category_id', $cat->id)->orderBy('name', 'asc')->get();
               $category=$cat->name;
            }
            else{
                $skills = array();
            }
        }

        $categories = array('' => 'All') +  Category::lists('name', 'name')->all();

        return view('Skills', ['skills' => $skills, 'categories' => $categories, 'category' => $category]);
    }


    /**
    * Accept a category and redirect to index
    *
    */
    public function category(Request $request)
    {
        
        $category = $request->input('category');    
        return redirect()->action('SkillController@index', array('category'=>$category));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
