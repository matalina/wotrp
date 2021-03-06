<?php

use Illuminate\Database\Migrations\Migration;

class CreateCache extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cache', function($t)
		{
		    $t->string('key')->unique();
		    $t->text('value');
		    $t->integer('expiration');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cache');
	}

}