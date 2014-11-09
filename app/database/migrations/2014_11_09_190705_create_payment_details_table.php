<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('paymentdetails', function($table){
			$table->increments('id');
			$table->integer("user_id")->unsigned();
			$table->string("first_name");
			$table->string("last_name");
			$table->string("email");
			$table->string("address");
			$table->string("address_2");
			$table->string("city");
			$table->string("post_zip_code");
			$table->string("state");
			$table->string("country");
			$table->boolean("postal_address");
			$table->timestamps();
		});

		Schema::table('paymentdetails', function($table) {
		    $table->foreign('user_id')->references('id')->on('users');
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
		Schema::drop('paymentdetails');
	}

}
