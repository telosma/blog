<?php

/*
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

	Route::get('/', 'UserController@getHome');

	Route::get('/dashboard', [
			'uses' => 'UserController@getDashboard',
			'as' => 'dashboard'

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