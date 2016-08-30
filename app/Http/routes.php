<?php

Route::group(['middleware' => ['web']], function() {

	Route::get('/', [
	    'uses' => 'UserController@getHome',
	    'as' => 'home'
	]);

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

	Route::get('admin',['middleware' => 'isadmin', function(){
		return view('layouts.admin');
	}]);

	Route::get('auth/facebook',[
		'uses' => 'FacebookController@redirectToProvider',
		'as' => 'facebook.login'
	]);

	Route::get('auth/facebook/callback', 'FacebookController@handleProviderCallback');

	Route::get('logout', [
	     'uses' => 'UserController@getLogout',
         'as' => 'user.logout',     	
	]);
});

Route::get('user/all', 'UserController@getAll');