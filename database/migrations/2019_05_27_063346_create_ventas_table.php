<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('cliente_id');
        });
        schema::create('producto_venta',function (Blueprint $table){
            $table->unsignedInteger('producto_id');
            $table->unsignedInteger('venta_id');
            $table->unsignedInteger('cantidad');
            $table->foreign('producto_id')
                ->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('venta_id')
                ->references('id')->on('ventas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('producto_venta');
        Schema::dropIfExists('ventas');
    }
}
