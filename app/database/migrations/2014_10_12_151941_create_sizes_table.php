<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSizesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('sizes', function($table){
			$table->increments('id');
			$table->integer("shirttype_id")->unsigned();
			$table->string("title");
			$table->timestamps();
		});

		Schema::table('sizes', function($table) {
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
		Schema::table('sizes', function($table){
			$table->drop('sizes');
		});
	}

}
