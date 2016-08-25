<?php

/*
<<<<<<< HEAD
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::group(['middleware'=>['web']], function(){

	Route::get('/', [
			'uses' => 'UserController@getHome',
			'as' => 'home'
		]);
	Route::get('/dashboard', [
			'uses' => 'UserController@getDashboard',
			'as' => 'dashboard',
			'middleware' => 'auth',
		]);

	Route::post('/user/signin', [
								'uses'=>'UserController@postSignIn', 
								'as'=>'signin'
								]);
	
	Route::post('/user/signup', [
								'uses'=>'UserController@postSignUp', 
								'as'=>'signup'
								]);
});
=======
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */



//Route::group(['middleware' => ['web']], function() {

Route::get('/', 'UserController@getHome');

Route::get('/dashboard', [
    'uses' => 'UserController@getDashboard',
    'as' => 'dashboard'
]);

Route::post('/user/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'signin'
]);

Route::post('/user/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
]);
//});

Route::get('home', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);
>>>>>>> b341588afc813179008bd5ee15208805bc53bdd4
