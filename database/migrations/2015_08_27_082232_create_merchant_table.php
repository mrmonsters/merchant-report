<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::dropIfExists('ozr_merchant');

		Schema::create('ozr_merchant', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('project_id')->unsigned(true);
			$table->foreign('project_id')->references('id')->on('ozr_project');
			$table->integer('category_id')->unsigned(true);
			$table->foreign('category_id')->references('id')->on('ozr_category');
			$table->string('name');
			$table->string('address');
			$table->string('pic');
			$table->string('email');
			$table->string('contact_no');
			$table->integer('status')->default(0);
			$table->boolean('deleted')->default(false);
			$table->timestamps('created_at');
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
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		Schema::drop('ozr_merchant');
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
