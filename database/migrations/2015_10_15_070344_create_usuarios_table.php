<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre', 30);
			$table->string('contacto_nombres', 255);
			$table->string('contacto_apellidos', 255);
			$table->integer('id_rol')->unsigned();
			$table->foreign('id_rol')->references('id')->on('roles')->onDelete('cascade');
			$table->integer('id_cliente')->unsigned();
			$table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');
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
		Schema::drop('usuarios');
	}

}
