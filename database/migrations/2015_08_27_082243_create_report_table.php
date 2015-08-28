<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::dropIfExists('ozr_report');

		Schema::create('ozr_report', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('project_id')->unsigned(true);
			$table->foreign('project_id')->references('id')->on('ozr_project');
			$table->integer('merchant_id')->unsigned(true);
			$table->foreign('merchant_id')->references('id')->on('ozr_merchant');
			$table->string('competitors');
			$table->boolean('interested');
			$table->boolean('merchant_status');
			$table->string('action_taken');
			$table->string('remarks');
			$table->integer('status')->default(2);
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
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		Schema::drop('ozr_report');
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
