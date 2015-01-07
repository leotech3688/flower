<?php
use Illuminate\Support\Facades\Input;
$name = Input::get('name');
$name = Input::get('name', 'LIUYANG');

if (Input::has('name')){
	
}


//INPUT
$input = Input::all();
$input = Input::only('username', 'password');
$input = Input::except('credit_card');
$input = Input::get('products.0.name');

//COOKIE
$value = Cookie::get('name');

$response = Response::make('Hello World');
$response->withCookie(Cookie::make('name', 'value', $minutes));

Input::flash();
Input::flashOnly();
Input::flashExcept();

$uri = Request::path();
$method = Request::method();
if (Request::isMethod('post'))
{
}

if(Request::is('admin/*'))
{}

$url = Request::url();
$segment = Request::segment(1);
$value = Request::header('Content-Type');
$value = Request::server("PATH_INFO");
if (Request::secure())
{}

if (Request::ajax()){}
if (Request::isJson()){}
if (Request::wantsJson()){}

$response = Response::make($contents, $statusCode);
$response->header('Content-Type', $value);
return $response;

return Response::view('hello')->header('Content-Type', $style);
return Response::make($content)->withCookie($cookie);

return Redirect::to('user/login');
return Redirect::to('user/login')->with('message', 'Login Failed');

return Redirect::route('login');
return Redirect::route('profile', [1]);
return Redirect::route('profile', ['user'=>1]);
return Redirect::action('homeController@index');

View::composer('profile', function($view)
{
	$view->with('count', User::count());
});

View::composer(['profile', 'dashboard'],function($view){
	$view->with('count', Userr::count());
});

App::bind('foo', function($app){
	return new FooBar;
});

$value = App::make('foo');

App::singleton('foo', function(){
	return new FooBar;
});

$foo = new Foo;
App::instance('foo',$foo);

App::bind('UserRepositoryInterface', 'DbUserRepository');

class UserController extends BaseController{
	public function __construct(UserRepositoryInterface $users)
	{
		$this->users = $users;
	}
}

use Illuminate\Support\ServiceProvider;
class FooServiceProvider extends ServiceProvider{
	public function register()
	{
		$this->app->bind('foo',function(){
			return new Foo;
		});
	}
}

App::resolvingAny(function($object){
	//
});

App::resolving('foo', function($foo){
	//
});

Viewer::creator('profile', function($view){
	$view->with('count', User::count());
});


return Response::json(['name'=>'Steve','state'=>'CA']);
return Response::json(['name'=>'Steve','state'=>'CA'])
->setCallback(Input::get('callback'));

return Response::json([]);

return Response::download($pathToFile);
return Response::download($pathToFile, $name, $headers);

return Response::macro('caps', function($value){
	return Response::make(strtoupper($value));	
});

return Response::caps('foo');

if(Auth::check())
{
	//The User is Logged In;	
}

if (Auth::attempt(['email'=>$email, 'password'=>$password], true))
{
	//The User is being remembered...
}

if (Auth::viaRemember())
{
	
}


































