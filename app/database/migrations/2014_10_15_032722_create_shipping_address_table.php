<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('shippingaddresses', function($table){
			$table->increments('id');
			$table->integer("order_id")->unsigned();
			$table->string("country");
			$table->string("address_1");
			$table->string("address_2")->nullable();
			$table->string("city");
			$table->string("state")->nullable();
			$table->string("post_zip_code");
			$table->string("shipping_method");
			$table->timestamps();
		});

		Schema::table('shippingaddresses', function($table) {
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
		Schema::table('shippingaddresses', function($table){
			$table->drop('shippingaddresses');
		});
	}

}
