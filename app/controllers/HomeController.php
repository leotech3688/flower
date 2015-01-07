<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showIndex()
	{
		return View::make('index', ['curr1'=>'class=curr']);
	}
	
	public function showXianhua()
	{
		return View::make('XianHua', ['curr2'=>'class=curr']);
	}
	

	public function showSignUp()
	{
		return View::make('SignUp');
	}
	
	public function showSignIn()
	{
		return View::make('SignIn');
	}
	public function showInitDb()
	{
		return View::make('db/initDb', ['flag'=>0]);
	}
}
