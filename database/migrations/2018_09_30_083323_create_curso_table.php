<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('curso', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('descricao', 45);
			$table->string('preco', 45);
			$table->string('nome', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('curso');
	}

}
