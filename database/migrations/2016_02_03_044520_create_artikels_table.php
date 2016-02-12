<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artikels', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_user');
			$table->string('title');
			$table->string('content');
			$table->string('slug');
			$table->string('pict');
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
		Schema::drop('artikels');
	}

}
