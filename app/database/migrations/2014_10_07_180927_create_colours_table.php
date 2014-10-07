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
			$table->integer("product_id")->unsigned();
			$table->string("name");
			$table->text("hex_value");
			$table->timestamps();
		});

		Schema::table('colours', function($table) {
		    $table->foreign('product_id')->references('id')->on('products');
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
