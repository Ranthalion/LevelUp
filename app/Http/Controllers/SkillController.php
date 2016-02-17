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
    public function index(Request $request, $category = 'All')
    {
        /*
        if ($request->isMethod('post')){
            return redirect()->action('SkillController@index', array('category' =>$category));
        }
        */

        if ($category == 'All'){
            $skills = Skill::orderBy('name', 'asc');
        }
        else{
            $cat = Category::where('name', $category)->first();

            if ($cat == null){
                $skills = Skill::where('name', '');
               
            }
            else{
               $skills = Skill::where('category_id', $cat->id)->orderBy('name', 'asc');
               $category=$cat->name; 
            }
        }

        $categories = array('' => 'All') +  Category::lists('name', 'name')->all();
        
        if($request->ajax()){
            $name = $request->input('searchString');
            $skills = $skills->where('name', 'like', '%' . $name . '%');
            return view('partials.Skills', ['skills' => $skills->get()]);
        }
        else{
            return view('Skills', ['skills' => $skills->get(), 'categories' => $categories, 'category' => $category]);
        }
    }


    /**
    * Accept a category and redirect to index
    *
    */
    public function changeCategory(Request $request)
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
