<?php
use Illuminate\Support\Facades\View;
class AuthController extends BaseController {
	public function check()
	{
		//获取前台页面参数
		$username = Input::get('username');
		//查询数据库记录条数
		$count = User::where('username', '=', $username)->count();
		if ($count > 0)
			return ["error"=>"该用户名已被占用!"];
		else
			return ["ok"=>"恭喜你,可以使用!"]; //提示注册成功  
	}
	
	public function create()
	{
		//获取表单参数
		$username = Input::get('username');
		$password = Input::get('password');
		$phone = '18675971411';
		$email = 'liuyang.jn@qq.com';
		//Save to DB
		$user = new User;
		$user->username = $username;
		$user->password = Hash::make($username);
		$user->phone = $phone;
		$user->email = $email;
		$user->save();
		Auth::login($user);
		//提示注册成功
		return View::make('SignUpTip');
	}
	
	public function login()
	{
		//获取表单输入
		$username = Input::get('username');
		$password = Input::get('password');
		//$isAutoLogin = Input::get('isAutoLogin');
		//查询数据库
		if (Auth::attempt(['username' => $username, 'password' => $password]))
		{//查询成功
			return ['status' => 1, 'info' => '用户登陆成功!', 'url' => '/'];    
		}
		else
		{//查询失败
			return ['info' => '用户名或密码不存在'];
		}
	}
	
	public function logout()
	{
		Auth::logout();
		return View::make('index');
	}
}