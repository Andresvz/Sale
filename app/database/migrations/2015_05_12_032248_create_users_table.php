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
			//
			$table->increments('id');
			$table->string('nombre', 60)->unique();
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('img');
			$table->string('ubicacion');
			$table->string('direccion');
			$table->string('horario');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			//
			Schema::drop('users');
		});
	}

}
