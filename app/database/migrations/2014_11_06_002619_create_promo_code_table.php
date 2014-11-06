<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromoCodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('promocodes', function($table){
			$table->increments('id');
			$table->string("unique_promo_code");
			$table->string("discount_type");
			$table->string("amount");
			$table->integer("number_of_usage");
			$table->timestamp("expiry_date");
			$table->integer("usage_limit");
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
		Schema::drop('promocodes');
	}

}
