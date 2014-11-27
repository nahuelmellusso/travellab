<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cities extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
				Schema::create('City', function($table){
		 
		            $table->increments('id');
		            $table->string('Country_id',2)->unsigned;
		            $table->foreign('Country_Id')->references('id')->on('Country');
		            $table->string('City', 100);
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
		Schema::drop('City');
	}

}
