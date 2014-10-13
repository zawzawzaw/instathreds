<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShirttypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// could add back price
		// and images like body, shadow, etc...
		//
		Schema::create('shirttypes', function($table){
			$table->increments('id');
			$table->integer("gender_id")->unsigned();
			$table->string("title");
			$table->decimal("price", 6, 2);
			$table->timestamps();
		});

		Schema::table('shirttypes', function($table) {
		    $table->foreign('gender_id')->references('id')->on('genders');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('shirttypes');
	}

}
