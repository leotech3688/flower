<?php
class HelpController extends BaseController {
	public function showIndex()
	{
		//Save to DB

		//提示注册成功
		return View::make('Help');
	}

	public function showHelp1A()
	{
		//提示注册成功
		return View::make('help/1-A');
	}
}