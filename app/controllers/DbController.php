<?php
class DbController extends BaseController {
	public function initGroup()
	{
		//Save to DB
		try
		{
			// Create the group
			$group = Sentry::createGroup([
					'name'        => '',
					'permissions' => [
							'admin' => 1,
							'users' => 1,
					],
			]);
		}
		catch (Cartalyst\Sentry\Groups\NameRequiredException $e)
		{
			echo 'Name field is required';
		}
		catch (Cartalyst\Sentry\Groups\GroupExistsException $e)
		{
			echo 'Group already exists';
		}
		//提示注册成功
		return View::make('db/initDb', ['flag'=>1]);
	}
}