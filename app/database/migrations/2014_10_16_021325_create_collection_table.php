<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('collections', function($table){
			$table->increments('id');
			$table->integer("order_id")->unsigned();
			$table->string("store_location");
			$table->timestamps();
		});

		Schema::table('collections', function($table) {
		    $table->foreign('order_id')->references('id')->on('orders');
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
		Schema::table('collections', function($table){
			$table->drop('collections');
		});
	}

}
