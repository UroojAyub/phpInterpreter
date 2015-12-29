<?php

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


Route::group(['middleware' => ['web']], function () {

	
	
	
	Route::get('/ViewCode' , 'ViewCodeController@getCode');
	// Authentication routes...
	Route::get('login', 'Auth\AuthController@getLogin');
	Route::post('login', 'Auth\AuthController@postLogin');
	Route::get('logout', 'Auth\AuthController@getLogout');
	
	// Registration routes...
	Route::get('register', 'Auth\AuthController@getRegister');
	Route::post('register', 'Auth\AuthController@postRegister');

	
	Route::group(['middleware' => ['auth']], function() {
	Route::get('/', function () {
    return view('interpreter');
});   

Route::get('/mycode.blade.php', function () {
    return view('mycode');
});  

Route::get('/prevcodes',  'PrevCodesController@displayCodes');  

Route::post('/',"InterpretController@interpret");
		
	});
		
});



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




Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});





