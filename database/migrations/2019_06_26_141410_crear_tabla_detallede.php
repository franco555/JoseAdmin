<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDetallede extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallede', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('Precio', 8, 2)->nullable();
            $table->smallInteger('Cantidad')->default(0);

            $table->unsignedInteger('documentoentrada_id');
            $table->unsignedInteger('productoproceso_id');
            
            //$table->foreign('documentoentrada_id','fkdetalleDE_docEntrada')->references('id')->on('documentoentrada');
            //$table->foreign('productoproceso_id','fkdetalleDE_productoProceso')->references('id')->on('productoproceso');
            ///$table->foreign('documentoentrada_id')->references('id')->on('documentoentrada')->onDelete('restrict');
            ///$table->foreign('productoproceso_id')->references('id')->on('productoproceso')->onDelete('restrict');
        });

        Schema::table('detallede', function($table)
        {
            $table->foreign('documentoentrada_id','fkdetalleDE_docEntrada')->references('id')->on('documentoentrada');
            $table->foreign('productoproceso_id','fkdetalleDE_productoProceso')->references('id')->on('productoproceso');
            //$table->foreign('documentoentrada_id','fkdetalleDE_docEntrada')->references('documentoentrada')->on('id');
            //$table->foreign('productoproceso_id','fkdetalleDE_productoProceso')->references('productoproceso')->on('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallede');
    }
}
