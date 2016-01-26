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

Route::group(['middleware' => ['web']], function () {
    /**
	* Dashboard
	*/
	Route::get('/', function(){
		return redirect('/login');
	});

	Route::get('/tasks', function(Request $request){
		$tasks = Task::orderBy('created_at', 'asc')->get();

		return view('tasks', [
			'tasks' => $tasks
		]);
	});
	
	/**
     * Add New Task
     */
    Route::post('/task', function (Request $request) {
         $validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
		]);

		if ($validator->fails()) {
			return redirect('/')
				->withInput()
				->withErrors($validator);
		}

		// Create The Task...
		$task = new Task;
		$task->name = $request->name;
		$task->save();

		return redirect('/');
    });

    /**
     * Delete Task
     */
    Route::delete('/task/{task}', function (Task $task) {
        $task->delete();

		return redirect('/');
    });
	
	Route::get('/login', function(){
		return view("login");

	});



	Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
    Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
    /*
    Route::get('auth/google', 'Auth\AuthController@redirectToProvider');
    Route::get('auth/google/callback', 'Auth\AuthController@handleProviderCallback');
	*/
});
