<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArrayRecordsTable extends Migration {

	public function up()
	{
		Schema::create('array_records', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('record_crmid')->unique()->unsigned();
			$table->string('record_module', 100);
			$table->string('record_jobtype', 30);
			$table->float('record_gst', 10);
			$table->integer('record_metalfinish_id')->unsigned()->nullable();
			$table->string('record_mode', 30);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('array_records');
	}
}