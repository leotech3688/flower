<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
#------------------ Page Route ------------------------
Route::get('/', 'HomeController@showIndex');
Route::get('/signUp', 'HomeController@showSignUp');
Route::get('/product/xianHua', 'HomeController@showXianHua');
Route::get('/signIn', 'HomeController@showSignIn');
Route::get('/initDb', 'HomeController@showInitDb');

#------------------ Auth Route ------------------------
Route::any('/auth/signup/check', 'AuthController@check');
Route::post('/auth/create', 'AuthController@create');

?>