<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//declaracion de como se crea la tabla dentro de phpmy admin
class CreatePregunticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //me ha creado esta tabla con dos columnas
    public function up()
    {
          //me ha creado esta tabla con dos columnas
        Schema::create('pregunticas', function (Blueprint $table) {
            $table->id();//esto siempre se va a usar xk es autoincrementable y numerico, es un campo clave
            $table->integer('nivel');
            $table->string('tema',20);
            $table->string('enunciado',1024);
            $table->string('r1');
            $table->string('r2');
            $table->string('r3');
            $table->string('r4');
            $table->integer('correcta');

           // $table->timestamps(); //crea dos campos: 
            //el que indica el momento en el que se creo el registro y cuando se actualizo
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pregunticas');
    }
}
