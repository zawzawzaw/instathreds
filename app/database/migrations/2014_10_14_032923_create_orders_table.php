<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('orders', function($table){
			$table->increments('id');
			$table->string('contact_first_name');
			$table->string('contact_last_name');
			$table->string('contact_email');
			$table->string('contact_phone');
			$table->string('sub_total');
			$table->string('shipping_cost');
			$table->string('discount');
			$table->string('total');
			$table->string('status');
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
		//
		Schema::drop('orders');
	}

}
