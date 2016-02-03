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
			$table->increments('id');
			$table->string('name');
			$table->string('contact_fname');
			$table->string('contact_lname');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->integer('id_rol')->unsigned();
			$table->foreign('id_rol')->references('id')->on('roles')->onDelete('cascade');
			$table->integer('id_cliente')->unsigned();
			$table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');
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
		Schema::drop('users');
	}

}
