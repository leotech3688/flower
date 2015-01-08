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
#------------------ Auth Filter -----------------------
Route::group(['before' => 'auth'], function()
{
	Route::get('/order', 'HomeController@showOrder');
	Route::get('/repay', 'HomeController@showRepay');
});

#------------------ Page Route ------------------------
Route::get('/', 'HomeController@showIndex');
Route::get('/signUp', 'HomeController@showSignUp');
Route::get('/signIn', 'HomeController@showSignIn');
Route::get('/product/xianHua', 'HomeController@showXianHua');
#-------------------Help Center------------------------
Route::get('/help', function(){
	return View::make('Help');
});
Route::get('/help/{id}', function($id){
	return View::make('help/'.$id);
});

#-------------------Post Sale------------------------	
Route::get('/postSale', function(){
	return View::make('PostSale');
});
Route::get('/postSale/{id}', function($id){
	return View::make('postsale/'.$id);
});

#------------------ Auth Route ------------------------
Route::any('/auth/signup/check', 'AuthController@check');
Route::post('/auth/create', 'AuthController@create');
?>