<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mailing extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
				Schema::create('mailing', function($table){
		 
		            $table->string('id',2);
		            $table->string('nombre', 100);
		            $table->string('mail',200);
		            $table->integer('agente');
		            $table->integer('quiere');
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
			Schema::drop('mailing');
		}

}
