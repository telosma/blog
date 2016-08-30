<?php

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
    'uses' => 'UserController@getAll',
    'as' => 'home'
]);
