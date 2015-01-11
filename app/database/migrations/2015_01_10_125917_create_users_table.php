<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			// auto increment id(primary key)
			$table->increments('id');
			
			$table->string('username');
			$table->string('password');
			$table->string('phone')-->nullable();
			$table->string('email')-->nullable();
			$table->string('remember_token')-->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 * cmd:<php artisan migrate:rollback>
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('users');
	}

}
