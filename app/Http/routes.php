<?php

use App\Task;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::get('/skills/{category?}', 'SkillController@index');
Route::post('/skills/{category?}', 'SkillController@index');
Route::post('/category/{category?}', 'SkillController@changeCategory');

Route::group(['middleware' => ['web']], function () {
    
	Route::get('/', function(){
		return view('splash');
	});

	Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
    Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
    Route::auth();
    Route::get('/home', 'HomeController@index');
    //Route::resource('skills', 'SkillController');
});

Route::group(['middleware' => ['web', 'auth']], function () {
    
    Route::controller('profile', 'ProfileController');
    
});
