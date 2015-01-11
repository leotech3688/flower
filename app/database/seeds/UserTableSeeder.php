<?php
class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'username' => 'liuyang',
			'password' => 'admin007',
			'phone' => '18678825257',
			'email' => '1960009001@qq.com'					
		]);
		User::create([
			'username' => 'yangshan',
			'password' => '007admin',
			'phone' => '15069017976',
			'email' => 'yangshan@qq.com'
		]);
	}
}