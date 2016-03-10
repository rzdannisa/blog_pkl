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
			$table->string('id_artikel');
			$table->integer('id_user');
			$table->text('title');
			$table->text('content');
			$table->text('slug');
			$table->text('pict');
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
