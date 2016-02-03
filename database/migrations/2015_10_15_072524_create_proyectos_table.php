<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyectos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre', 300);
			$table->integer('profundidad');
			$table->string('perforado', 255);
			$table->integer('diametro');
			$table->string('maquina', 255);
			$table->string('metodo', 255);
			$table->text('observaciones');
			$table->integer('id_estado')->unsigned();
			$table->foreign('id_estado')->references('id')->on('estados')->onDelete('cascade');
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
		Schema::drop('proyectos');
	}

}
