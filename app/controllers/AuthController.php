<?php
class AuthController extends BaseController {
	public function check()
	{
		//Save to DB
		
		//提示注册成功
		return ["ok"=>"恭喜你,可以使用!"];
	}
	
	public function create()
	{
		//Save to DB
	
		//提示注册成功
		return View::make('signtip');
	}
}