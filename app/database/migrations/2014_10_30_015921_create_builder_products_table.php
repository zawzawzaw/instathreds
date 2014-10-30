<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuilderProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('builderproducts', function($table){
			$table->increments('id');
			$table->string("unique_builder_product_id");
			$table->string("title");
			$table->string("front_image");
			$table->string("back_image");
			$table->string("product_details");
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
		Schema::drop('builderproducts');
	}

}
