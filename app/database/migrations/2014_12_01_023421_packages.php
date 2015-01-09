<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Packages extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Package', function(Blueprint $tabla){

 			
            $tabla->increments('id',1);
            $tabla->integer('validez');
            $tabla->string('titulo', 200);
            $tabla->string('subtitulo', 200);
            $tabla->date('vigencia_comprar_desde');
            $tabla->date('vigencia_comprar_hasta');
            $tabla->date('vigencia_viajar_desde');
            $tabla->date('vigencia_viajar_hasta');    
            $tabla->string('obsvig', 200);
            $tabla->integer('dias');
            $tabla->integer('noches');
            $tabla->integer('translado');
            $tabla->string('empresa', 200);
            $tabla->integer('escalas');
            $tabla->integer('directo');
            $tabla->integer('primera');
            $tabla->integer('economica');
            $tabla->string('obsaer', 200);
            $tabla->integer('dni');
            $tabla->integer('visa');
            $tabla->integer('pasaporte');
            $tabla->integer('vacunas');
            $tabla->string('obsdoc', 200);
            $tabla->integer('desayuno');
            $tabla->integer('mediap');
            $tabla->integer('pencomp');
            $tabla->integer('allinclus');
            $tabla->string('obsaloja', 200);
            $tabla->string('pais', 200);
            $tabla->integer('aventura');
            $tabla->integer('safari');
            $tabla->integer('playa');
            $tabla->integer('tropical');
            $tabla->integer('escapadas');
            $tabla->integer('cruceros');
            $tabla->integer('cultura');
            $tabla->integer('luna');
            $tabla->integer('anos');
            $tabla->integer('slider');
            $tabla->integer('user');


         
            $tabla->timestamps();
 		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Package');
	}

}
