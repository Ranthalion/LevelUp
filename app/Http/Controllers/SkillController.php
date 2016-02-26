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
        $cat = Category::where('name', $category)->first();
        $searchTerm = $request->input('searchString', '');

        $skills = Skill::InCategory($cat)
            ->MatchingTerm($searchTerm)
            ->orderBy('name', 'asc')
            ->get();
        
        if($request->ajax()){
            return view('partials.Skills', ['skills' => $skills]);
        }

        if ($cat != null){
            $category = $cat->name;
        }
        
        $categories = array('' => 'All') +  Category::lists('name', 'name')->all();
        return view('Skills', ['skills' => $skills, 'categories' => $categories, 'category' => $category]);

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
