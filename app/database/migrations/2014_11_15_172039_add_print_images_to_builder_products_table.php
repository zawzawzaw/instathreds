<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrintImagesToBuilderProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('builderproducts', function(Blueprint $table)
		{
			$table->string('front_print_image');
			$table->string('back_print_image');
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
		Schema::table('builderproducts', function(Blueprint $table)
		{
			$table->dropColumn('front_print_image');
			$table->dropColumn('back_print_image');
		});
	}

}
