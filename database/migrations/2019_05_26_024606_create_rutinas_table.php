<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutinas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cliente_id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->timestamps();
        });
        schema::create('ejercicio_rutina',function (Blueprint $table){
            $table->unsignedInteger('ejercicio_id');
            $table->unsignedInteger('rutina_id');
            $table->unsignedInteger('series');
            $table->unsignedInteger('repeticiones');
            $table->char('dia');
            $table->foreign('ejercicio_id')
                ->references('id')->on('ejercicios')->onDelete('cascade');
            $table->foreign('rutina_id')
                ->references('id')->on('rutinas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('ejercicio_rutina');
        Schema::dropIfExists('rutinas');
    }
}
