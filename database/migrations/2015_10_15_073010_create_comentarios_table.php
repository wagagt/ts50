<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comentarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('comentario');
			$table->integer('avance');
			$table->integer('horas');
			// $table->integer('id_usuario')->unsigned();
			// $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
			$table->integer('id_proyecto')->unsigned();
			$table->foreign('id_proyecto')->references('id')->on('proyectos')->onDelete('cascade');
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
		Schema::drop('comentarios');
	}

}
