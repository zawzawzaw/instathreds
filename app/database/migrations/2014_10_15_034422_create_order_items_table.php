<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('ordersitems', function($table){
			$table->increments('id');
			$table->string('product_id');
			$table->integer("order_id")->unsigned();
			$table->string('qty');
			$table->string('price');
			$table->string('options');
			$table->timestamps();
		});

		Schema::table('ordersitems', function($table) {
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
		Schema::table('ordersitems', function($table){
			$table->drop('ordersitems');
		});
	}

}
