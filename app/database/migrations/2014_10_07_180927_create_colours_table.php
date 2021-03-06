<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColoursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('colours', function($table){
			$table->increments('id');
			$table->integer("shirttype_id")->unsigned();
			$table->string("name");
			$table->text("hex_value");
			$table->timestamps();
		});

		Schema::table('colours', function($table) {
		    $table->foreign('shirttype_id')->references('id')->on('shirttypes');
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
		Schema::table('colours', function($table){
			$table->drop('colours');
		});
	}

}
